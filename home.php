<!DOCTYPE html>
<html> 
    <head>
            <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
            <link rel="manifest" href="/manifest.json">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Irrigação</title>
	<style>
         
		body {
			padding:0px;
			margin:0px;
		}
                
		#menu ul {
                    
                    display: flex;
                    justify-content: space-around;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    background-color:#00CED1;

		}
 
		#menu ul li { 
                    display: inline; 
                }
 
		#menu ul li a {
			background-color:#00CED1;
			color: #fff;
			text-decoration: none;
			border-bottom:1px solid #40E0D0;
			padding: 2px 10px;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#40E0D0;
			color: #6D6D6D;
			border-bottom:1px solid #00CED1;
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
</body>
</html>

    <?php
    session_start();
    
    if (isset($_SESSION ['nacesso'])){
       echo 'Bem-vindo, '.$_SESSION['nacesso']. ' - ADMINISTRADOR ';
    }else if(isset($_SESSION['normal'])){
       echo 'Bem-vindo, '.$_SESSION['normal'].'';
    } else {
        echo '<script type="text/javascript">window.location = "login.php"</script>';
    }
    ?>