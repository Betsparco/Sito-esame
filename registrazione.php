<!DOCTYPE html>
<html lang="IT-it">
<head>
	<meta charset="UTF-8">
	<title>Registrazione</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


  <header class="header clearfix">
    <a href="" class="header_logo"><img src="Logo.jpg" width="40px" height="40px"></a>
    <ul class="header_menu">
      <li class="header_menu_item"><a href="login.php">Login</a></li>
      <li class="header_menu_item"><a href="registrazione.html">Registrazione</a></li>
      <li class="header_menu_item"><a href="info.html">Info</a></li>
    </ul>
  </header>

<?php
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
   	$username = $_POST['username'];
   	$email = $_POST['email'];
	  $password = $_POST['password'];

		if(strlen($username) != 0 && strlen($password) != 0){
			$db = new mysqli ("localhost", "esamedomenicodimaso", "", "my_esamedomenicodimaso");
			$query = "SELECT * FROM utenti WHERE username = '$username'";
			$result = $db->query($query);
            echo "$result->num_rows";
			 if($result->num_rows != 0){
				 echo "L'utente gia esiste!";
			 }else{
				 $query = "INSERT INTO utenti (Nome, Cognome, username, email, password) VALUES ('$Nome', '$Cognome', '$username', '$email', '$password')";
				 $db->query($query);
         header('location: login.html');
			 }
			 $result->free;
			 $db->close();
		}else{
			echo "Username o Password non validi!";
		}
?>
  </body>
</html>
