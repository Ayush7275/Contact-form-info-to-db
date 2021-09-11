<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once "./vendor/autoload.php";
require_once "./vendor/phpmailer/phpmailer/src/PHPMailer.php";
// require_once "help.php";
// $email = $_POST["email"];
// $mobile = $_POST["mobile"];
// $city = $_POST["city"];

$FullName = $_POST["FullName"];
$PhoneNumber = $_POST["phone"];
$EmailAddress = $_POST["email"];
$Message = $_POST["message"];
// echo $email . $mobile . $city;
// exit();
if (isset($FullName)) {
  $mail =  new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";
  $mail->SMTPDebug  = 1;
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "golucode7@gmail.com";
  $mail->Password   = "Ayush123@@";
  $mail->IsHTML(true);

  $mail->AddAddress($email, "SV");
  // $mail->AddAddress($EmailAddress, $FullName);
  $mail->SetFrom("no-reply@Practicing.com", "practicing");
  // $mail->AddReplyTo("replyTothis@pracice.com", "reply-to-name");
  $mail->AddCC("ayush.dubey.712@gmail.com", "cc-recipient-name");
  $mail->Subject = " Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b> $email.</b>";
  // $content = "<b> $EmailAddress   $PhoneNumber    $FullName  $Message.</b>";
  $mail->MsgHTML($content);
  if (!$mail->Send()) {
    echo "Error while sending Email.";
    // var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
  // echo "Hello";
} else {
  echo "Something Went wrong";
}
