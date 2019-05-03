    <?php
    session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<title>Sistema Irrigação</title>
</head>
<style>
        html {
            height: 100%;
            color: rgb(0,0,0);
        }

        body{
            min-height: 100%;
            background-image: url(images/home.png);
            background-position: center;
            background-color: #2e4053;
            background-size:cover;
            background-repeat: no-repeat;
        }

        @media only screen and (max-device-width: 1100px) {
            body {
                background-image: url(images/homemobile.png);
            }
        }
        
        nav .brand-logo {
           font-size: 1.8rem; 
        }
              
       nav {
        color: #fff;
        background-color: #3f566e;
        width: 100%;
        height: 56px;
        line-height: 56px;
        }

        .side-nav {
        background-color: #2e4053;
        }
        
        .side-nav a {          
        color: #fff;
        }
        
        .side-nav hr {
        color: #2e4053;
        border-color:#3f566e;
        box-shadow:1px
        }
        
        .side-nav li>a>i, .side-nav li>a>[class^="mdi-"], .side-nav li>a>[class*="mdi-"], .side-nav li>a>i.material-icons {
            color:#fff;
        }

        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {
            display:inline;
        }


</style>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"> &nbsp; &nbsp;Sistema de Irrigação</a>
        <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
         </a>
    <ul class="right hide-on-med-and-down">
             <li><a href="index.php">HOME</a></li>
             <li><a href="controle.php">SENSORES</a></li>
             <li><a href="dados.php">DADOS</a></li>
            <li><a href="faleconosco.php">FALE CONOSCO</a></li>
            <li><a href="sair.php">SAIR</a></li>
    </ul>
    <ul class="side-nav" id="menu-mobile">
             <li><a href="index.php"><i class="material-icons">home</i>HOME</a></li>
             <hr>
             <li><a href="controle.php"><i class="material-icons">insert_chart</i>SENSORES</a></li>
             <hr>
             <li><a href="dados.php"><i class="material-icons">search</i>DADOS</a></li>
             <hr>
             <li><a href="faleconosco.php"><i class="material-icons">chat</i>FALE CONOSCO</a></li>
             <hr>
             <li><a href="sair.php"><i class="material-icons">exit_to_app</i>SAIR</a></li>
             <hr>
    </ul>
     </div>
 </nav>
</body>
 <script>
 $(function(){
     $(".button-collapse").sideNav();
 });
 </script>
</html>
