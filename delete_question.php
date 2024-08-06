<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $member = getMemberInfo($pdo);

    $stmt = $pdo->prepare('SELECT mem_id FROM questions WHERE id = ?');
    $stmt->execute([$id]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($question && $question['mem_id'] == $member['mem_id']) {
        try {
            $sql = "DELETE FROM questions WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                // Đặt thông báo thành công
                $_SESSION['message'] = array("text" => "Questions successfully deleted.", "alert" => "info");
            } else {
                $_SESSION['message'] = array("text" => "You are not authorized to delete this question.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        $_SESSION['message'] = array("text" => "Invalid questions ID.", "alert" => "danger");
    }

    // Chuyển hướng về trang chủ sau khi xóa
    header("Location: my_question.php");
    exit();
}
?>
