<?php
include '../../includes/DatabaseConnection.php';

$sql = "SELECT `mem_id`,`firstname`,`lastname`,`username`,`displayname`,`dob`,`phone`,`email` FROM `member`";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "<tr>
            <td>{$row['mem_id']}</td>
            <td>{$row['firstname']}</td>
            <td>{$row['lastname']}</td>
            <td>{$row['username']}</td>
            <td><a href='../../authors_question.php?mem_id={$row['mem_id']}'>{$row['displayname']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['email']}</td>
            <td class='td-modify'>
                <form action='../deletestudent.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this student?\")'>
                    <input type='hidden' name='mem_id' value='{$row['mem_id']}'>
                    <input type='submit' class='action_btn action_btn--delete' value='Delete'>
                </form>

                <form action='../views/edit_student_ui.html.php' method='get'>
                    <input type='hidden' name='mem_id' value='{$row['mem_id']}'>
                    <input type='submit' class='action_btn action_btn--edit' value='Edit'>
                </form>
            </td>
          </tr>";
}
?>
