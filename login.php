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
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
        <title>Login</title>
        
    <style>       
        
        body {
          background: #2e4053;
        }
        
       nav {
        color: #fff;
        background-color: #3f566e;
        width: 100%;
        height: 56px;
        line-height: 56px;
        }
        
        nav .brand-logo {
           font-size: 1.8rem; 
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
        #error{
            margin: 10px 0 0;
            color: red;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
        }
</style>
</head>
<body>
 <nav>
    <div class="nav-wrapper"id="conteudo">
        <a href="#" class="brand-logo"> &nbsp; &nbsp;Login</a>
        <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
        </a>
    <ul class="right hide-on-med-and-down">
             <li><a href="index.php">HOME</a></li>            
             <li><a href="faleconosco.php">FALE CONOSCO</a></li>
    </ul>
    <ul class="side-nav" id="menu-mobile">
              <li><a href="index.php"><i class="material-icons">home</i>HOME</a></li>
             <hr>
             <li><a href="faleconosco.php"><i class="material-icons">chat</i>FALE CONOSCO</a></li>
    </ul>
    </div>
 </nav>
        
<div class="login-page">
    <div class="form">
        <form class="register-form" action="" method="post">
            <input type="text" placeholder="Usuário" name="usuario" required autofocus/>
            <input type="password" placeholder="Senha" name="senha" required/>
            <input type="email" placeholder="E-mail" name="e-mail" required/>
            <button id="criar" name="cadastrar" type="submit">Criar</button>
            <br>
            <?php if(isset($_SESSION['user-exist'])): ?>
            <p id="error"> USUÁRIO JÁ EXISTE! </p>
            <?php endif; unset($_SESSION['user-exist']); ?>
            <?php if(isset($_SESSION['error'])): ?>
            <p id="error"> ERRO AO CADASTRAR! </p>
            <?php endif; unset($_SESSION['error']); ?>
            <p class="message">Já está registrado? <a href="#">Entre</a></p>
        </form>
        <form class="login-form" action="" method="post">
            <input type="text" name="login" placeholder="Usuário"required autofocus/>
            <input type="password" name="pass" placeholder="Senha"required/>
            <button id="entrar" name="entrar" type="submit">Entrar</button>
            <br>

            <?php if(isset($_SESSION['nao_autenticado'])): ?>
            <p id="error"> USUÁRIO OU SENHA INCORRETOS! </p>
            <?php endif; unset($_SESSION['nao_autenticado']); ?>
            <p class="message">Não está registrado? <a href="#">Criar conta</a></p>
        </form>
    </div>
</div>                        
        
<?php
include ('conexao.php');
  

$link = mysqli_connect($host, $user, $pass, $dbname);     

    function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
     
switch (get_post_action('cadastrar', 'entrar')) {
    case 'cadastrar':
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST ['e-mail'];
         
        $query_select = "SELECT login FROM usuarios WHERE login = '$usuario'";
        $select = mysqli_query($link,$query_select);
        $array = mysqli_fetch_array($select);
        $logarray = $array['login'];

          if($logarray == $usuario){
            $_SESSION['user-exist'] = true;
           echo '<script type="text/javascript">window.location = "login.php"</script>';
            die();
          }else{
            $query = "INSERT INTO usuarios (login,senha,email) VALUES ('$usuario','$senha','$email')";
            $insere = mysqli_query($link,$query);
            }          
            if($insere){
               $_SESSION['usuario'] = true;  
               	echo '<script type="text/javascript">window.location = "home.php"</script>';
            }else{
               $_SESSION['error'] = true;
               	echo '<script type="text/javascript">window.location = "login.php"</script>';
             	exit();
            }
          
        break;

    case 'entrar':

        $login = mysqli_real_escape_string($link, $_POST['login']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);
        
    $get = mysqli_query($link, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$pass'");
    $row = mysqli_num_rows($get);
        
if ($row == 1){
       $_SESSION['usuario'] = $login;
	echo '<script type="text/javascript">window.location = "home.php"</script>';
	exit();
    }else{ 
        $_SESSION['nao_autenticado'] = true;
	echo '<script type="text/javascript">window.location = "login.php"</script>';
	exit();
   } 
        break;
    default:
}
?>

 <script>
     
  $('.message a').click(function () {
  $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});
 $(function(){
     $(".button-collapse").sideNav();
 });
 
</script>

</body>
</html> 