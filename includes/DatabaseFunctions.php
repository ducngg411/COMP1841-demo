<?php

function registerUser($pdo, $data) {
    if (!empty($data['firstname']) && !empty($data['username']) && !empty($data['password'])) {
        try {
            $firstname = htmlspecialchars($data['firstname']);
            $lastname = htmlspecialchars($data['lastname']);
            $username = htmlspecialchars($data['username']);
            $password = htmlspecialchars($data['password']);
            $displayname = htmlspecialchars($data['displayname']);
            $dob = htmlspecialchars($data['dob']);
            $phone = htmlspecialchars($data['phone']);
            $email = htmlspecialchars($data['email']);

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO member (firstname, lastname, username, password, displayname, dob, phone, email) VALUES (:firstname, :lastname, :username, :password, :displayname, :dob, :phone, :email)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':displayname', $displayname);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                // $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
                header('Location: students_show.php');
                exit();
            } else {
                return "Failed to insert data.";
            }

        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    } else {
        return "Please fill up the required fields!";
    }
}
