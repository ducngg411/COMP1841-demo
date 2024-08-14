<?php
// Include the database connection file
include '../includes/DatabaseConnection.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the mem_id from the submitted form
    $mem_id = $_POST['mem_id'];

    // Check if mem_id is not empty
    if (!empty($mem_id)) {
        try {
            // Prepare the SQL statement to delete a member by mem_id
            $sql = "DELETE FROM member WHERE mem_id = :mem_id";
            $stmt = $pdo->prepare($sql);
            // Bind the mem_id parameter to the prepared statement
            $stmt->bindParam(':mem_id', $mem_id, PDO::PARAM_INT);
            
            // Execute the statement and check if the deletion was successful
            if ($stmt->execute()) {
                // Set a success message in the session
                $_SESSION['message'] = array("text" => "Student successfully deleted.", "alert" => "info");
            } else {
                // Set an error message if the deletion failed
                $_SESSION['message'] = array("text" => "Failed to delete student.", "alert" => "danger");
            }
        } catch (PDOException $e) {
            // Set an error message if there was a PDO exception
            $_SESSION['message'] = array("text" => "Error: " . $e->getMessage(), "alert" => "danger");
        }
    } else {
        // Set an error message if mem_id is invalid or empty
        $_SESSION['message'] = array("text" => "Invalid student ID.", "alert" => "danger");
    }

    // Redirect to the students_show.html.php page after processing
    header("Location: views/students_show.html.php");
    exit();
}
?>
