<?php
include 'includes/DatabaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modules_id = $_POST['modules_id'];

    if (!empty($modules_id)) {
        try {
            $sql = "DELETE FROM modules WHERE modules_id = :modules_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':modules_id', $modules_id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                // Đặt thông báo thành công
                $_SESSION['message'] = array("text" => "Student successfully deleted.", "alert" => "info");
            } else {
                $_SESSION['message'] = array("text" => "Failed to delete student.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        $_SESSION['message'] = array("text" => "Invalid student ID.", "alert" => "danger");
    }

    // Chuyển hướng về trang chủ sau khi xóa
    header("Location: modules_show.php");
    exit();
}
?>
