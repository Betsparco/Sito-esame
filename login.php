<?php
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
?>
<!DOCTYPE html>
<html lang="IT-it">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
	<link rel="stylesheet" href="style.css">
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

  <section class="cover">
     <div class="cover_caption">
       <form method="POST" action="login.php">
         <fieldset>
           <legend>LogIn</legend>
           <table>
             <tr>
               <td>E-mail: <input type="text" name="email"></td>
             </tr>
             <tr>
               <td>Password: <input type="password" name="password"></td>
             </tr>
           </table>
           <input type="submit" value="Accedi">
           <a href="registrazione.html">Registrati</a>
         </fieldset>
       </form>
     </div>
  </section>
</body>
</html>
<?php
     }
     else{
?>
<html>
   <head>
   </head>
   <body>
   <?php
       $email = $_POST['email'];
       $password = $_POST['password'];
       if (strlen($email) != 0 && strlen($password) != 0){
            $connection = new mysqli( "localhost","esamedomenicodimaso","","my_esamedomenicodimaso");
            $query ="SELECT * FROM utenti WHERE email = '$email'";
            $result = $connection->query($query);
       if ($result->num_rows == 0) {
            echo "Utente sconosciuto: ";

        }
        else {
            $user_row = $result->fetch_array();
            if ($password == $user_row['password']) {
                echo "Password corretta: ";
                echo " <a href=\"index.php\"> accedi.</a><br>";
                // distruzione eventuale sessione
                // precedente
                session_start();
                session_unset();
                session_destroy();
                // inizializzazione nuova sessione
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['start_time'] = time();
                $_SESSION ['username'] = $user_row['username'];
                $_SESSION ['password'] = $user_row['password'];
                echo " <a href=\"logout.php\"> [$username logout]</a>";
            }
            else {
                echo "Password errata: ";
                echo " <a href=\"login.php\"> riprova.</a>";
            }
        }
        $result->free();
        $connection->close();
    }
    else {
        echo "Username/password non validi: ";
        echo " <a href=\"login.php\">riprova.</a>";
    }
?>
 </body>
</html>
<?php
}
?>
