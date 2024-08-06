<?php 

include_once 'includes/DatabaseConnection.php';
include_once 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question_id = $_POST['question_id'];
    $mem_id = $mem_id['mem_id'];

    $stmt = $pdo->prepare("SELECT * FROM bookmarks WHERE question_id = ? AND mem_id = ?");
    $stmt->execute([$question_id, $mem_id]);
    $bookmarks = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($bookmarks) {
        echo "This question has been bookmarked before!";
    } else {
        $stmt = $pdo->prepare("INSERT INTO bookmarks (question_id, mem_id) VALUES (?,?) ");;
        $stmt->bindParam(1, $question_id);
        $stmt->bindParam(2, $mem_id);

        if ($stmt->execute()) {
            echo "Save to bookmarks successfully!";
            header('Location: my_bookmark.php');
        } else {
            echo "Something went wrong now!";
        }
    }
}

?>