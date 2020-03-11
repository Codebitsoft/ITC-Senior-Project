<?php
function send_mail($to, $body, $subject)
{
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'your gmail username@gmail.com';
	$mail->Password = 'your gmail password';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	
	$mail->From = 'your gmail username@gmail.com';
	$mail->FromName = 'Your Name';
	$mail->addAddress($to);
	$mail->addReplyTo('your gmail username@gmail.com', 'Reply');
	
	$mail->isHTML(true);
	
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send())
	{
		echo 'Message could not be sent.';
	} 
	else 
	{
		echo 'Message has been sent';
	}
}
 
?>

<html>

<head>
	<title> Thank You </title>
<head>

<body>
	<p>Thank you for taking the time to provide feedback to our company!<br>
	Click <a href="newland.php"> here </a> to return. </p>
	
</body>

</html>