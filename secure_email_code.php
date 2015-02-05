<?php
if(isset($_POST["submit"]))
{
	// Checking For Blank Fields..
	if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
	echo "<script type='text/javascript'>alert('Fill All Field!')</script>";
}
else
{
	// Check if the "Sender's Email" input field is filled out
	$email=$_POST['vemail'];
	// Sanitize E-mail Address
	$email =filter_var($email, FILTER_SANITIZE_EMAIL);
	// Validate E-mail Address
	$email= filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$email)
	{
		echo "<script type='text/javascript'>alert('Invalid Sender's Email!')</script>";
	}
	else
	{
		$subject = $_POST['sub'];
		$message = $_POST['msg'];
		$headers = 'From:'. $email . "\r\n"; // Sender's Email
		// Message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// Send Mail By PHP Mail Function
		$mail_sender =  mail("praveendelecon@gmail.com", $subject, $message, $headers);
		echo $mail_sender ? "<script type='text/javascript'>alert('Mail send!')</script>" : "<script type='text/javascript'>alert('Mail send failed!')</script>";
	}
}
}
?>
