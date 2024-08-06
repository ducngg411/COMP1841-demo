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

function getCountById(PDO $pdo): int {
    $sql = "SELECT COUNT(mem_id) AS count FROM member";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result['count'];
}

function getCountByQuestionId(PDO $pdo): int {
    $sql = "SELECT COUNT(id) AS count FROM questions";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result['count'];
}



function getModulesById(PDO $pdo): int {
    $sql = "SELECT COUNT(modules_id) AS count FROM modules";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result['count'];
}


function createModules($pdo, $data) {
    if (!empty($data['modules_name']) && !empty($data['modules_description']) && !empty($data['create_time'])) {
        try {
            $modules_name = htmlspecialchars($data['modules_name']);
            $modules_description = htmlspecialchars($data['modules_description']);
            $create_time = htmlspecialchars($data['create_time']);

            $sql = "INSERT INTO modules (modules_name, modules_description, create_time) VALUES (:modules_name, :modules_description, :create_time)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':modules_name', $modules_name);
            $stmt->bindParam(':modules_description', $modules_description);
            $stmt->bindParam(':create_time', $create_time);


            if ($stmt->execute()) {
                // $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
                header('Location: modules_show.php');
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

function getMemberInfo($pdo) {
    session_start(); // Bắt đầu session

    // Kiểm tra xem session user có tồn tại không
    if (!isset($_SESSION['user'])) {
        header("Location: index.php"); // Điều hướng về trang đăng nhập nếu user chưa đăng nhập
        exit();
    }

    $mem_id = $_SESSION['user'];

    // Lấy thông tin của thành viên hiện tại
    $sql = "SELECT * FROM member WHERE mem_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mem_id]);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$member) {
        die("Member not found");
    }

    return $member;
}
?>