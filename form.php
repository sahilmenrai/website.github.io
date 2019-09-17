<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	$subject="Admission Enquiry";
	$to="sahilmenrai3@gmail.com";
	$headers="From : $name<$email>";
	$message="Name : $name \n\n Email : $email \n\n Message : $msg";
	if(mail($to,$subject,$message,$headers))
	{
		echo "Email sent";
	}
	else{
		echo "error";
	}
}
?>