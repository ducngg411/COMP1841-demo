<?php 

include_once 'includes/DatabaseConnection.php';
include_once 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo);
$modules = $_GET['modules_id'] ?? null;
if (!$modules) {
    echo 'Id not found!';
    exit();
}

$sql = "SELECT mo.modules_name, mo.modules_description, mo.questions_count 
                FROM modules mo
                WHERE mo.modules_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$module = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT COUNT(DISTINCT q.mem_id) AS author_count
                FROM questions q
                WHERE q.modules_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$author_count = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT q.id, q.title, q.created_at, q.edited_at, m.displayname, m.mem_id,
                (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                FROM questions q
                JOIN member m ON q.mem_id = m.mem_id
                WHERE q.modules_id = ?
                ORDER BY q.created_at DESC LIMIT 20";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>