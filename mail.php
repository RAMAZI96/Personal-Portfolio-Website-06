<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$to = "ramazigogitidze1996@gmail.com";
$subject = "Mail From Website";
$headers = "From: ".$name. "\r\n" .
"CC: ";
$txt = "You have received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\nMessage:" .$message;
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}
header("Location:thankyou.html")

?>