<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT q.id, q.title, q.content, q.code, q.image, q.image_type, q.created_at, q.edited_at, q.mem_id, m.displayname, m.username, m.role, mo.modules_name, mo.modules_id,
                            (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count 
                            FROM questions q
                            JOIN member m ON q.mem_id = m.mem_id
                            JOIN modules mo ON q.modules_id = mo.modules_id
                            WHERE q.id = ?");
    $stmt->execute([$id]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$question) {
        echo "Question not found";
        exit;
    }
    
    $stmt = $pdo->prepare("SELECT a.content, a.code, a.image, a.image_type, a.created_at, m.displayname, m.username 
                            FROM answers a
                            JOIN member m ON a.mem_id = m.mem_id
                            WHERE a.question_id = ?
                            ORDER BY a.created_at DESC");
    $stmt->execute([$id]);
    $answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} else {
    echo "Question Id hasn't been provided!";
    exit;
}

$member = getMemberInfo($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['answer'])) {
    $content = $_POST['content'];
    $code = $_POST['code'];
    $mem_id = $member['mem_id'];

    if (!empty($_FILES['image']['tmp_name'])) {
        $image = $_FILES['image']['tmp_name'];
        $imageContent = file_get_contents($image);
        $imageType = $_FILES['image']['type'];

        $stmt = $pdo->prepare("INSERT INTO answers (question_id, content, code, image, image_type, mem_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $code);
        $stmt->bindParam(4, $imageContent, PDO::PARAM_LOB);
        $stmt->bindParam(5, $imageType);
        $stmt->bindParam(6, $mem_id);
    } else {
        $stmt = $pdo->prepare("INSERT INTO answers (question_id, content, code, mem_id) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $code);
        $stmt->bindParam(4, $mem_id);
    }

    if ($stmt->execute()) {
        header("Location: view_question.html.php?id=$id");
    } else {
        echo "An unexpected error has occurred";
    }
}

?>