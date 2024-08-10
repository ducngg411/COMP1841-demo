<?php 

include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo); 

if ($member['role'] == 'admin') {
    header('Location: ../admin/views/admin_layout.html.php');
} else {
    header('Location: ../homelogin.html.php');
}