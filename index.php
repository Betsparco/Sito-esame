<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="IT-it">
<head>
  <meta charset="utf-8">
  <!-- Praticamente annullano tutti gli stili preimpostati, così da avere una tela bianca su cui creare il nostro Design.-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
</head>
<body>

<header class="header clearfix">
  <a href="" class="header_logo"><img src="Logo.jpg" width="40px" height="40px"></a>
  <ul class="header_menu">
    <li class="header_menu_item"><a href="logout.php"><?php
    echo "[$_SESSION[email] logout]"?></a></li>
    <li class="header_menu_item"><a href="registrazione.html">Registrazione</a></li>
    <li class="header_menu_item"><a href="info.html">Info</a></li>
  </ul>
</header>

<section class="cover">
   <div class="cover_caption">
      <h1 align="center">Lo sviluppo delle Architetture Web</h1>
      <iframe align="center" src='https://onedrive.live.com/embed?cid=B4CB3DEF9C23110A&resid=B4CB3DEF9C23110A%211420&authkey=AMWsCPcp7qhW5Gw&em=2&wdAr=1.7777777777777777&wdEaa=1' width='1920px' height='800px' frameborder='0'>Documento di <a target='_blank' href='https://office.com'>Microsoft Office</a> incorporato, con tecnologia <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>
   </div>
</section>
</body>
</html>
