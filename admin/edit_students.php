<?php
include '../includes/DatabaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mem_id = $_POST['mem_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $displayname = $_POST['displayname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE member SET firstname = ?, lastname = ?, username = ?, password = ?, displayname = ?, 
    dob = ?, phone = ?, email = ? WHERE mem_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstname, $lastname, $username, $hashed_password, $displayname, $dob, $phone, $email, $mem_id]);

    header("Location: views/students_show.html.php?status=updated");
    exit();
}
?>
