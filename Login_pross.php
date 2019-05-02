<?php
			
			$conn=mysqli_connect("localhost","root","","test");
			$email=$_POST['sss'];
			$passw=$_POST['pwd'];
			$query="SELECT email,pwd FROM registrationform where email='$email' AND pwd='$passw'";
			$res=mysqli_query($conn,$query);
			
			if($rows=mysqli_num_rows($res)==TRUE)
					{
						
					header("location:login.php");
					}
					else
					{
						echo"err ";
					}
			
?>