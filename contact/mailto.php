<?php
$contact_company = $_POST['company'];
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_content = $_POST['content'];

$contact_company = htmlspecialchars($contact_company,ENT_QUOTES,'UTF-8');
$contact_name = htmlspecialchars($contact_name,ENT_QUOTES,'UTF-8');
$contact_email = htmlspecialchars($contact_email,ENT_QUOTES,'UTF-8');
$contact_content = htmlspecialchars($contact_content,ENT_QUOTES,'UTF-8');

$to = "atsukofu0527@gmail.com";
$subject = ".$contact_name.様よりお問い合わせ";
$message = "会社名: .$contact_company.<br/><br>.$contact_content.";
$headers = "From: .$contact_email";

mail($to, $subject, $message, $headers);

header('Location:mail-done.php');
    exit();
?>