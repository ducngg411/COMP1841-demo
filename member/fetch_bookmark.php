<?php 
$stmt = $pdo->prepare("SELECT b.id, b.question_id, q.title, b.created_at, m.mem_id
                       FROM bookmarks b
                       JOIN questions q ON b.question_id = q.id 
                       JOIN member m ON b.mem_id = m.mem_id 
                       WHERE b.mem_id = ?
                       ORDER BY b.created_at DESC");
$stmt->execute([$mem_id['mem_id']]);
$bookmarks = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($bookmarks as $row) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['question_id']}</td>
            <td><a href='../../templates/view_question.html.php?id={$row['question_id']}'>{$row['title']}</a></td>
            <td>{$row['created_at']}</td>
            <td class='td-modify td-modify--modules'>
                <form action='../delete_bookmark.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this bookmark?\")'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <input type='submit' class='action_btn action_btn--delete' value='Delete'>
                </form>
            </td>
        </tr>";
}
?>