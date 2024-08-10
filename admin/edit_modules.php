<?php
include '../includes/DatabaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modules_id = $_POST['modules_id'];
    $modules_name = $_POST['modules_name'];
    $modules_description = $_POST['modules_description'];
    $create_time = $_POST['create_time'];

    $sql = "UPDATE modules SET modules_name = ?, modules_description = ?, create_time = ? WHERE modules_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$modules_name, $modules_description, $create_time, $modules_id]);

    header("Location: views/modules_show.html.php?status=updated");
    exit();
}
?>
