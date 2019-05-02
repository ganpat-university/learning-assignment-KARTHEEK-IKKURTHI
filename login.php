<html>    
    <head>    
        <title>Log In</title> 
		<link rel="stylesheet" type="text/css" href="loginpage1.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>    
    <body>
		<div class="w3-container">    
		<div class="main">
        <h2 class="w3-text-orange">Log In </h2>
			
			<form class="w3-container"name="login" onsubmit=""   name = "form1"  method = "POST" action="Login_pross.php" enctype = "multipart/form-data" >
			<p>
                    <label class="w3-text-orange">Email </label>    
                    <input class="w3-input" type = "email" name="sss" onkeyup="return validateForm();" size="25" onblur="return validateForm();" size="25"	 value = "" required /></p>	
				<p>    
                    <label class="w3-text-orange">Password:</label>    
                    <input class="w3-input" type = "password" name = "pwd" value = "" required/></p>
				<button class="w3-button w3-ripple w3-orange">Submit</button>
				
        </div>    
        </form>
		</div>		
			
	</body>    
</html>    
