<?php
session_start();

require_once 'includes/DatabaseConnection.php'; // Đảm bảo rằng tệp này được bao gồm đúng cách

if (isset($_POST['register'])) {
    // Kiểm tra tất cả các trường bắt buộc đã được điền
    if (!empty($_POST['firstname']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        try {
            // Lấy và làm sạch dữ liệu người dùng nhập vào
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $displayname = htmlspecialchars($_POST['displayname']);
            $dob = htmlspecialchars($_POST['dob']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            
            // Mã hóa mật khẩu sử dụng phương pháp bảo mật hơn
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Chuẩn bị câu lệnh SQL
            $sql = "INSERT INTO member (firstname, lastname, username, password, displayname, dob, phone, email) VALUES (:firstname, :lastname, :username, :password, :displayname, :dob, :phone, :email)";
            $stmt = $pdo->prepare($sql);

            // Gán giá trị cho các tham số
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':displayname', $displayname);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);

            // Thực thi câu lệnh
            if ($stmt->execute()) {
                // Đặt thông báo thành công
                $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");

                // Chuyển hướng đến index.php
                header('Location: index.php');
                
                exit(); // Đảm bảo rằng không có mã nào khác được thực thi
            } else {
                echo "Failed to insert data.";
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "<script>alert('Please fill up the required fields!')</script>";
        echo "<script>window.location = 'registration.php'</script>";
    }
}
?>
