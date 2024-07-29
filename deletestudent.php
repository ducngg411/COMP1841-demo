<?php
include 'includes/DatabaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mem_id = $_POST['mem_id'];

    if (!empty($mem_id)) {
        try {
            $sql = "DELETE FROM member WHERE mem_id = :mem_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':mem_id', $mem_id, PDO::PARAM_INT);
            
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
    header("Location: students_show.php");
    exit();
}
?>
