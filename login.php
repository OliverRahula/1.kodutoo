<?php

//echo $_POST["email"];

//Defineeri muutujad
$email_error = "";
$password_error = "";

//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	//echo "jah;"
	
	
	// kas e-post on tühi
	if(empty($_POST["email"])))
	

	//jah oli tühi
	$email_error = "See väli on kohustuslik";
	$password_error = "See väli on kohustuslik";
}



?>
<html>
<head>
	<title> Login page </title>
</head>

	
	
	
<body>

	
	
	<form action="login.php" method="post">
		<h2>Login</h2>
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input type="submit" placeholder="Logi sisse" > <br><br>		
	</form>

		
	
	<h2>Create user</h2>
		
		
		
		
</body>


</html>
