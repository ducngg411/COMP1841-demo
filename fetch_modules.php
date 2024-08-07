<?php
include 'includes/DatabaseConnection.php';

$sql = "SELECT `modules_id`, `modules_name`, `modules_description`, `create_time`, `questions_count` FROM `modules`";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "<tr>
            <td>{$row['modules_id']}</td>
            <td><a href='modules_specific.php?modules_id={$row['modules_id']}'>{$row['modules_name']}</td>
            <td>{$row['modules_description']}</td>
            <td>{$row['create_time']}</td>
            <td>{$row['questions_count']}</td>
            <td class='td-modify td-modify--modules'>
                <form action='delete_modules.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this modules?\")'>
                    <input type='hidden' name='modules_id' value='{$row['modules_id']}'>
                    <input type='submit' class='action_btn action_btn--delete' value='Delete'>
                </form>

                <form action='edit_modules_ui.php' method='get'>
                    <input type='hidden' name='modules_id' value='{$row['modules_id']}'>
                    <input type='submit' class='action_btn action_btn--edit' value='Edit'>
                </form>
            </td>
        </tr>";
}
?>