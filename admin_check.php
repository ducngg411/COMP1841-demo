<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo); 

if ($member['role'] == 'admin') {
    header('Location: admin_layout.php');
} else {
    header('Location: homelogin.php');
}