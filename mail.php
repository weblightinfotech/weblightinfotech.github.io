<?php $name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$note = $_POST['note'];
$formcontent="From: $name \n company: $company \n Message: $note";
$recipient = "info@weblightinfotech.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
 ?>