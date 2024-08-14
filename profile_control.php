<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo)['mem_id'];

// Fetch current data
$sql = "SELECT * FROM member WHERE mem_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$mem_id]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$member) {
    echo "Member not found!";
    exit();
}
?>