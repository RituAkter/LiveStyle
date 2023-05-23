<?php
//get data from form  

$name = $_POST['companyName'];
$email= $_POST['email'];
$message1= $_POST['LinkPage'];
$message2 = $_POST['WebName'];
$message3 = $_POST['fPage'];
$number = $_POST['phoneNum'];

$to = "borsharitu854@gmail.com";
$subject = "Mail From Livestyl";
$txt ="Company Name = ". $name . "\r\n  Email = " . $email . "\r\n LinkedIn Page =" . $message1 . "\r\n Website =" . $message2 . "\r\n Facebook Page =" . $message3 . "\r\n Phone Number =" . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@livestyl.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../index.html");
?>