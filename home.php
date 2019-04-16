    <?php
    session_start();
?>

<!DOCTYPE html>
<html> 
    <head>
           <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
            <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Irrigação</title>
	<style>
         
		body {
			padding:0px;
			margin:0px;
                        background-image: url(images/home.png);
                        background-position:center;
                        background-color:#2bbbad;
                        background-attachment:fixed;
                        background-repeat: no-repeat;
                        background-size: cover;
		}
                
		#menu ul {
                    
                    display: flex;
                    justify-content: space-around;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    background-color:#26a69a;

		}
 
		#menu ul li { 
                    display: inline; 
                }
 
		#menu ul li a {
			background-color:#26a69a;
			color: #fff;
			text-decoration: none;
			border-bottom:1px solid #2bbbad;
			padding: 2px 10px;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#2bbbad;
			color: #6D6D6D;
			border-bottom:1px solid #26a69a;
		}
	</style>
</head>
 
<body>
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
