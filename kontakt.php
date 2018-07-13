<?php $nick = $_POST['nick'];
$email = $_POST['email'];
$wiadomosc = $_POST['wiadomosc'];
$formcontent="From: $nick \n Message: $wiadomosc";
$recipient = "damianszmulik@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>