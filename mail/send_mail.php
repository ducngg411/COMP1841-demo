<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
include '../mail/email_config.php';

function send_mail($sent_to_email, $sent_to_fullname, $subject, $content, $attachment = null, $option = array()) {
    global $config;
    $config_email = $config['email'];
    $mail = new PHPMailer(true); // Passing 'true' enables exceptions

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = $config_email['smtp_host']; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = $config_email['smtp_user']; // SMTP username
        $mail->Password = $config_email['smtp_pass']; // SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure']; // Enable TLS encryption, ssl also accepted
        $mail->Port = $config_email['smtp_port']; // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        // Recipients
        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname); // Add a recipient

        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']);

        // Attachments
        if ($attachment && $attachment['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
        }

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $attachment = isset($_FILES['attachment']) ? $_FILES['attachment'] : null;

    $subject = $title;
    $content = "<p><strong>Full Name:</strong> $fullname</p><p><strong>Email:</strong> $email</p><p><strong>Description:</strong> $description</p>";

    $result = send_mail('ducntgch221177@fpt.edu.vn', 'Admin', $subject, $content, $attachment);
    if ($result === true) {
        echo "Email has been sent successfully.";
    } else {
        echo $result;
    }
}
?>
