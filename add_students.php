<?php

session_start();

include 'includes/DatabaseFunctions.php'; 
require_once 'includes/DatabaseConnection.php'; 

if (isset($_POST['submit'])) {
    $response = registerUser($pdo, $_POST);
    if ($response !== true) {
        echo "<script>alert('$response')</script>";
        echo "<script>window.location = 'students_show.php'</script>";
    }
}

if (isset($_POST['cancel'])) {
    header('Location: students_show.php');
}
