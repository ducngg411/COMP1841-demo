<?php
// Include the database connection and function files
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

session_start(); // Ensure session is started to store messages

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the ID from the submitted form
    $id = $_POST['id'];
    // Get member information from the database
    $member = getMemberInfo($pdo);

    // Call the function to delete the question using the provided ID and member information
    deleteQuestion($pdo, $id, $member);

    // Redirect to the question management page after deletion
    header("Location: views/question_manage.html.php");
    exit();
} else {
    // If the request method is not POST, set an error message
    $_SESSION['message'] = array("text" => "Invalid request method.", "alert" => "danger");
    // Optionally redirect to the question management page (currently commented out)
    // header("Location: views/question_manage.html.php");
    exit();
}
?>
