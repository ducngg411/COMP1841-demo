<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';



if (!isset($_GET['mem_id'])) {
    die('Member ID not provided');
}

$mem_id = intval($_GET['mem_id']);
$stmt = $pdo->prepare(" SELECT q.id, q.title, q.content, q.created_at, mo.modules_name, mo.modules_id,
                        (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                        FROM questions q
                        JOIN modules mo ON mo.modules_id =  q.modules_id
                        WHERE q.mem_id = ?");
$stmt->execute([$mem_id]);
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT m.mem_id, m.firstname, m.lastname, m.username, m.displayname, m.dob, m.phone, m.email, COUNT(q.id) AS question_count
                        FROM member m
                        LEFT JOIN questions q ON m.mem_id = q.mem_id
                        WHERE m.mem_id = ? ");
$stmt->execute([$mem_id]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $pdo->prepare("SELECT COUNT(mem_id) as bookmark_count 
                        From bookmarks bo 
                        WHERE bo.mem_id = ?");
$stmt->execute([$mem_id]);
$student_bookmark = $stmt->fetch(PDO::FETCH_ASSOC);

$member_id = getMemberInfo($pdo);

?>
