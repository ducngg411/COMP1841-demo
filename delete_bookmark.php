<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $member = getMemberInfo($pdo);

    $stmt = $pdo->prepare('SELECT id FROM bookmarks WHERE id = ?');
    $stmt->execute([$id]);
    $bookmarks = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($bookmarks && $bookmarks['mem_id'] == $question['mem_id']) {
        try {
            $sql = "DELETE FROM bookmarks WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                // Đặt thông báo thành công
                $_SESSION['message'] = array("text" => "bookmarks successfully deleted.", "alert" => "info");
            } else {
                $_SESSION['message'] = array("text" => "You are not authorized to delete this bookmark.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        $_SESSION['message'] = array("text" => "Invalid bookmarks ID.", "alert" => "danger");
    }

    // Chuyển hướng về trang chủ sau khi xóa
    header("Location: my_bookmark.php");
    exit();
}
?>
