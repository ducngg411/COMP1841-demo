<?php

session_start();

include '../includes/DatabaseFunctions.php'; 
require_once '../includes/DatabaseConnection.php'; 

if (isset($_POST['submit'])) {
    $response = createModules($pdo, $_POST);
    if ($response !== true) {
        echo "<script>alert('$response')</script>";
        echo "<script>window.location = 'views/modules_show.html.php'</script>";
    }
}

if (isset($_POST['cancel'])) {
    header('Location: views/modules_show.html.php');
}





