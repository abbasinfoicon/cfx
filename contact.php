<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  require "vendor/autoload.php";
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  
  $mail = new PHPMailer(true);
  
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  
  $mail->Host = "smtp.example.com";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;
  
  $mail->Username = "uid3infoiconsoftware@gmail.com";
  $mail->Password = "Infoicon@123";
  
  $mail->setFrom($email, $name);
  $mail->addAddress("uid3@infoiconsoftware.com", "uid3");
  
  $mail->Subject = $subject;
  $mail->Body = $message;
  
  $mail->send();
  
  header("Location: thanks.html");