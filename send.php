<?php  
require("connect.php");
$mysqli = new mysqli("localhost", "root", "root", "project");  
$res="select e from data"; 
$id=$mysqli->query($res);
$cus=mysqli_fetch_assoc($id) ;  
//include("connect.php");
            $mysqli->close();
require 'vendor/autoload.php'; // Make sure to adjust the path if needed.

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // SMTP Server Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server hostname
    $mail->SMTPAuth = true;
    $mail->Username = 'sowindharam@gmail.com'; // Your SMTP server username
    $mail->Password = 'fgzxpqbqegcftpaa'; // Your SMTP server password
    $mail->SMTPSecure = 'tls'; // Use 'ssl' if required by your SMTP server
    $mail->Port = 587; // The SMTP port, 587 is for TLS

    // Email content
    $mail->setFrom('sowindharam@gmail.com', 'kalai');
    $mail->addAddress($cus );
    $mail->Subject = 'my email';
    $mail->Body = 'you won';

    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
    }
    
?>