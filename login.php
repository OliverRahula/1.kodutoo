<!DOCTYPE html>
<?php


	//echo $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	$eesnimi_error = "";
	$perekonnanimi_error = "";
	$vanus_error = "";
	$asukoht_error = "";
	
	
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		//Kas epost on tühi
		if( empty($_POST["email"]) ) {
			
			//jah oli tühi
			$email_error = "E-post on kohustuslik!";
		}
		
		
		//Kas parool on tühi
		if( empty($_POST["password"]) ) {
			
			//jah oli tühi
			$password_error = "Parool on kohustuslik!";
		
		}
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$eesnimi_error = "Eesnimi on kohustuslik!";
		
		}
		
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$perekonnanimi_error = "Perekonnanimi on kohustuslik!";
		
		}
		
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$vanus_error = "Vanus on kohustuslik!";
		
		}
		
		if( empty($_POST["text"]) ) {
			
			//jah oli tühi
			$asukoht_error = "Vanus on kohustuslik!";
		
		}
		
	}
?>
<html>

<head>
			<title> Oliver Rahula </title>
</head>
	
<body>

	<br><br>
	<br><br>
	<p align="center" style="font-size: 200%">MVP idee on tulekul.</p>

	<br><br>
	<h2 align="center">Sisselogimine</h2>
  
  
<form action="login.php" method="post" align="center">
	
    <input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?> <br><br>
	<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
	<input type="submit" placeholder="Logi sisse" > <br><br>	
	
</form>
	
	<br><br>
	<br><br>
	<h2 align="center">Registreerimine</h2>
	
	
<form action="login.php" method="post" align="center">	

		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input name="eesnimi" type="name" placeholder="Eesnimi"> <?php echo $eesnimi_error; ?> <br><br>
		<input name="perekonnanimi" type="name" placeholder="Perekonnanimi" > <?php echo $perekonnanimi_error ?> <br><br>
		<input name="vanus" type="age" placeholder="Vanus" > <?php echo $vanus_error ?> <br><br>
		<input name="asukoht" type="location" placeholder="Asukoht" > <?php echo $asukoht_error ?> <br><br>
		<input type="submit" placeholder="Sisesta" > <br><br>
		
</form>
	
	
</body>


</html>
