<?php
//get data from form  
$name = $_POST['contact-name'];
$email= $_POST['contact-email'];
$message= $_POST['contact-message'];
$to = "gunjanshingala@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>