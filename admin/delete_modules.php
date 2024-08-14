<?php
// Include the database connection file
include '../includes/DatabaseConnection.php';

session_start(); // Ensure the session is started to store messages

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the modules_id from the submitted form
    $modules_id = $_POST['modules_id'];

    // Check if modules_id is not empty
    if (!empty($modules_id)) {
        try {
            // Delete all questions related to this module
            $sql = "DELETE FROM questions WHERE modules_id = :modules_id";
            $stmt = $pdo->prepare($sql);
            // Bind the modules_id parameter to the prepared statement
            $stmt->bindParam(':modules_id', $modules_id, PDO::PARAM_INT);
            $stmt->execute();

            // Delete the module after deleting related questions
            $sql = "DELETE FROM modules WHERE modules_id = :modules_id";
            $stmt = $pdo->prepare($sql);
            // Bind the modules_id parameter to the prepared statement
            $stmt->bindParam(':modules_id', $modules_id, PDO::PARAM_INT);
            
            // Execute the statement and check if the deletion was successful
            if ($stmt->execute()) {
                // Set a success message if the module was deleted successfully
                $_SESSION['message'] = array("text" => "Module and its questions successfully deleted.", "alert" => "info");
            } else {
                // Set an error message if the module deletion failed
                $_SESSION['message'] = array("text" => "Failed to delete module.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            // Set an error message if a PDO exception occurs
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        // Set an error message if modules_id is invalid or empty
        $_SESSION['message'] = array("text" => "Invalid module ID.", "alert" => "danger");
    }

    // Redirect to the modules display page after deletion
    header("Location: views/modules_show.html.php");
    exit();
}
?>
