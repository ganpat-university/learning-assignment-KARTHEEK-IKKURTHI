<?php

			$host="localhost";
			$dbUsername="root";
			$dbpassword="";
			$dbname = "test";
			$conn=new mysqli($host, $dbUsername, $dbpassword,$dbname); //create A Connection
			session_start();
			if($conn->connect_error)
			{
				die("connection fail".$conn->connect_error);
			}
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if($_POST['pwd']==$_POST['cpwd'])
	{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];	
			$email=$_POST['email'];
			$pwd=$conn->real_escape_string($_POST['pwd']);//md5 hash password Security
			
			$sql="INSERT INTO registrationform(fname,lname,email,pwd)
			VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[pwd]')";
			
			
			/*$firstname = mysqli_real_escape_string($conn, $_POST["fname"]);  
           $lastname = mysqli_real_escape_string($conn, $_POST["lname"]);
$mail = mysqli_real_escape_string($conn, $_POST["email"]);
$pass = mysqli_real_escape_string($conn, $_POST["pwd"]);		   
           $password = md5($pass);  
           $sql = "INSERT INTO registrationform (fname, lname,email,pwd) VALUES('$firstname', '$lastname','$mail',md5('$pass'))";*/
			//if this query is successful,redirect to main page
			
			if($conn->query($sql) === TRUE)
			{
				$_SESSION['message']=	'Registtion Successful,$fname $lname Added To The DataBase';
				header("location:Booking.html");
			}
			else
			{
				$_SESSION['message']="User Could Not Adder To Th Database";
			}
	}
	else
		{
			$_SESSION['message']="Two Password Didn't Match Please Try Again";
		}
}

?>