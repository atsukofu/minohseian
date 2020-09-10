<?php
$contact_company = $_POST['company'];
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_content = $_POST['content'];

$contact_company = htmlspecialchars($contact_company,ENT_QUOTES,'UTF-8');
$contact_name = htmlspecialchars($contact_name,ENT_QUOTES,'UTF-8');
$contact_email = htmlspecialchars($contact_email,ENT_QUOTES,'UTF-8');
$contact_content = htmlspecialchars($contact_content,ENT_QUOTES,'UTF-8');

include( dirname(__FILE__) . '../../vendor/autoload.php');
$email = new \SendGrid\Mail\Mail();
$email->setFrom($contact_email, $contact_name);
$email->setSubject($contact_name."様よりお問い合わせ");
$email->addTo("atsukofu0527@gmail.com", "admin");
$email->addContent(
    "text/html", "<p>会社名:.$contact_company.<br/><br/>.$contact_content</p>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}


header('Location:mail-done.php');
    exit();
?>