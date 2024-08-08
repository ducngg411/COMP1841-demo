<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

session_start(); // Đảm bảo session được bắt đầu để lưu thông báo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $member = getMemberInfo($pdo);

    deleteQuestion($pdo, $id, $member);

    // Chuyển hướng về trang câu hỏi của tôi sau khi xóa
    header("Location: view_question.php");
    exit();
} else {
    $_SESSION['message'] = array("text" => "Invalid request method.", "alert" => "danger");
    header("Location: question_manage.php");
    exit();
}
?>
