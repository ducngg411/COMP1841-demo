<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $member = getMemberInfo($pdo);

    deleteQuestion($pdo, $id, $member);


    header("Location: ../templates/homelogin.html.php");
    exit();
} else {
    $_SESSION['message'] = array("text" => "Invalid request method.", "alert" => "danger");
    header("Location: ../templates/homelogin.html.php");
    exit();
}
?>
