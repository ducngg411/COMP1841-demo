<?php
include 'includes/DatabaseConnection.php';

session_start(); // Đảm bảo session được bắt đầu để lưu thông báo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modules_id = $_POST['modules_id'];

    if (!empty($modules_id)) {
        try {
            // Xóa các câu hỏi liên quan đến module này
            $sql = "DELETE FROM questions WHERE modules_id = :modules_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':modules_id', $modules_id, PDO::PARAM_INT);
            $stmt->execute();

            // Xóa module
            $sql = "DELETE FROM modules WHERE modules_id = :modules_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':modules_id', $modules_id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                // Đặt thông báo thành công
                $_SESSION['message'] = array("text" => "Module and its questions successfully deleted.", "alert" => "info");
            } else {
                $_SESSION['message'] = array("text" => "Failed to delete module.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        $_SESSION['message'] = array("text" => "Invalid module ID.", "alert" => "danger");
    }

    // Chuyển hướng về trang hiển thị module sau khi xóa
    header("Location: modules_show.php");
    exit();
}
?>
