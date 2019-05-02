<?php
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	$massage=$_POST['massage'];
	
	$email_from= 'malav.khatri.mk30@gmail.com';
	$email_subject= "Form Blush And Bloom";
	
	$email_body = 	"Name: $name.\n".
					"User Email: $email.\n".
					"User Massage: $massage.\n";
					
	$to ="malav.cba1712@ict.gnu.ac.in";
	$headers = "From : $email_from \r\n";
	$headers= "Reply-To:$email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html");

?>