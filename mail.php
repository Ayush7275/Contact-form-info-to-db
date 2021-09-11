<?php
if (isset($_POST['send'])) {
//get data from form  
$FullName = $_POST['FullName'];
$PhoneNumber = $_POST['phone'];
$EmailAddress = $_POST['email'];
$Message = $_POST['message'];
$to = "ayush.dubey.712@gmail.com";
$subject = "Mydigitaldudes";
$txt ="Name = ". $FullName . "\r\n  Phone = " . $PhoneNumber . "\r\n Email = " . $EmailAddress  . "\r\n Message =" . $Message;
$headers .= 'From: '.$EmailAddress.'<'.$EmailAddress.'>' . "\r\n".'Reply-To: '.$EmailAddress."\r\n" . 'X-Mailer: PHP/' . phpversion(); 
//"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
}
?>

