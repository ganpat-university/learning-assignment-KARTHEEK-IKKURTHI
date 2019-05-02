<?php
			$host="localhost";
			$dbUsername="root";
			$dbpassword="";
			$dbname = "test";
			$conn=new mysqli($host, $dbUsername,$dbpassword,$dbname); //create A Connection
			
			
			session_start();
 
if(isset($_POST['mail'])){
    
    $uname=$_POST['mail'];
    $password=$_POST['pwd'];
    
    $sql="select * from loginform where email='".$uname."'AND pwd='".$password."' limit 1";
    
    
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>