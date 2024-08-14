<?php 
$stmt = $pdo->prepare("SELECT q.id, q.title, q.created_at, q.edited_at, m.displayname, m.username, mo.modules_name 
                       FROM questions q
                       JOIN member m ON q.mem_id = m.mem_id
                       JOIN modules mo ON q.modules_id = mo.modules_id
                       ORDER BY q.created_at DESC");
$stmt->execute();
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($questions as $row) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td><a href='../../templates/view_question.html.php?id={$row['id']}'>{$row['title']}</a></td>
            <td>{$row['created_at']}</td>
            <td>{$row['username']}</td>
            <td>{$row['displayname']}</td>
            <td>{$row['modules_name']}</td>
            <td class='td-modify td-modify--modules'>
                <form action='../delete_question_admin.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this student?\")'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <input type='submit' class='action_btn action_btn--delete' value='Delete'>
                </form>
                
            </td>
        </tr>";
}
?>