    <?php
    session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9" name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/home.css"/>
	<title>Sistema Irrigação</title>
</head>
<style>
    
        body{
         background-image: url(images/home.png);
         background-position:center;
         background-color:#26a69a;
         -webkit-border-background-size: cover;
         -moz-border-background-size: cover;
         -ms-border-background-size:cover;
         -o-border-background-size:cover;
         background-size:cover;
        }
        
        @media only screen and (max-device-width: 1100px) {
        body {
         background-image: url(images/homemobile.png);
         background-position:center;
         background-color:#26a69a;
         -webkit-border-background-size: cover;
         -moz-border-background-size: cover;
         -ms-border-background-size:cover;
         -o-border-background-size:cover;
         background-size:cover;
         }

</style>
<body class="img-responsive">
        <div class="navbar-fixed">
          <div class="nav-wrapper"></div>

	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
                        <li><a href="controle.php">Controle</a></li>
                        <li><a href="dados.php">Dados</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="sair.php">Sair</a></li>
		</ul>
	</div>
    </div>
    <div>
        <p></p>
    </div>
</body>
</html>
