<?php
$email = new PHPMailer();



$bodytext=' This is the body of the test mail ';
$subject= 'plus2 Message Subject'.date(" H:i:s", time());


require_once('my_phpmailer/class.phpmailer.php');
$email = new PHPMailer();
$email->From = 'userid@example.com';
$email->From = AddReplyTo( 'userid@example.com', 'Contact Admin' );
$email->FromName = 'Your Name';
$email->Subject   = $subject;
$email->Body      = $bodytext;
$email->AddAddress('userid1@example.com');
$email->AddAddress('userid2@example.com');

$file_to_attach = 'your_dir/top.pdf'; // Path with file name
$email->AddAttachment( $file_to_attach);// File attached

if(!$email->send()) 
{
    echo "Mailer Error: " . $email->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>