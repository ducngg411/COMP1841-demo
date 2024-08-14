<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$stmt = $pdo->query("SELECT q.id, q.title, q.created_at, q.edited_at, m.displayname, m.mem_id, mo.modules_name, mo.modules_id,
                    (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                    FROM questions q
                    JOIN member m ON q.mem_id = m.mem_id
                    JOIN modules mo ON q.modules_id = mo.modules_id
                    ORDER BY q.created_at DESC LIMIT 20");
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query("SELECT q.id, q.title, q.created_at, q.edited_at, m.displayname, m.mem_id, mo.modules_name, mo.modules_id,
                    (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                    FROM questions q
                    JOIN member m ON q.mem_id = m.mem_id
                    JOIN modules mo ON q.modules_id = mo.modules_id
                    ORDER BY q.created_at DESC LIMIT 5");
$newest_questions = $stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt = $pdo->query(" SELECT m.mem_id, m.displayname, m.username, COUNT(q.id) AS question_count
                    FROM member m
                    JOIN questions q ON m.mem_id = q.mem_id
                    GROUP BY m.mem_id
                    ORDER BY question_count DESC
                    LIMIT 5");
$top_authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

$member = getMemberInfo($pdo);
?>