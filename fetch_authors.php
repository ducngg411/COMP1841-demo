<?php
include 'includes/DatabaseConnection.php';

$stmt = $pdo->prepare(" SELECT m.mem_id, m.firstname, m.lastname, m.username, m.displayname, m.dob, m.phone, m.email, COUNT(q.id) AS question_count
                        FROM member m
                        LEFT JOIN questions q ON m.mem_id = q.mem_id
                        WHERE m.mem_id IN (SELECT DISTINCT q.mem_id FROM questions q)
                        GROUP BY m.mem_id");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "<tr>
            <td>{$row['mem_id']}</td>
            <td>{$row['username']}</td>
            <td><a href='authors_question.php?mem_id={$row['mem_id']}'>" . htmlspecialchars($row['displayname']) . "</a></td>
            <td>{$row['email']}</td>
            <td>{$row['question_count']}</td>
        </tr>";
}
?>
