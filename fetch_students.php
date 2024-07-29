<?php
include 'includes/DatabaseConnection.php';

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
            <td>{$row['displayname']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['email']}</td>
            td class='td-modify'>
                <form action='deletestudents.php'>
                    <input type='hidden' name='mem_id' value='<?=$row['mem_id']?>'>
                    <input type='submit' class='action_btn action_btn--delete'value='Delete'>
                </form>
            </td>
          </tr>";
}
?>
