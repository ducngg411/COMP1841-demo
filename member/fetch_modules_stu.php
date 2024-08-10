<?php
include '../../includes/DatabaseConnection.php';

$sql = "SELECT `modules_id`, `modules_name`, `modules_description`, `create_time`, `questions_count` FROM `modules`";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "<tr>
            <td>{$row['modules_id']}</td>
            <td><a href='../../modules_specific.php?modules_id={$row['modules_id']}'>{$row['modules_name']}</a></td>
            <td>{$row['modules_description']}</td>
            <td>{$row['create_time']}</td>
            <td>{$row['questions_count']}</td>
            </td>
        </tr>";
}
?>