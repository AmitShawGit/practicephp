<?php
$to_email = "amit.edsoftlab@gmail.com";
$subject = "Simple email text via php";
$body = "This is a new mail through xampp";
$header = "From: amitshaw1421@gmail.com";

if(mail($to_email, $subject, $body, $header)){
    echo "Email sucessfully send to $to_email";
}else{
    "mail not send";
}
?>