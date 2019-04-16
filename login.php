<!DOCTYPE html>
<html>
<head>
            <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">   
           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="utf-8">
            <link rel="stylesheet" href="assets/css/login.css" />
        <title>Login</title>
    </head>
    
    <body id="body">       
        <div class="navbar-fixed">
          <div class="nav-wrapper">
              <div id="menu" class="body">
		<ul>
			<li><a href="index.php">Home</a></li>
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
			<li><a href="sobre.php">Sobre</a></li>
		</ul>
	</div>
        </div>
        </div>
        
  <div class="login-page">
  <div class="form">
      <form class="register-form" action="" method="post">
      <input type="text" placeholder="Usuário" name="usuario" required autofocus/>
      <input type="password" placeholder="Senha" name="senha" required/>
      <input type="email" placeholder="E-mail" name="e-mail" required/>
      <button id="criar" name="cadastrar" type="submit">Criar</button>
      <p class="message">Já está registrado? <a href="#">Entre</a></p>
    </form>
     <form class="login-form" action="" method="post">
      <input type="text" name="login" placeholder="Usuário"required autofocus/>
      <input type="password" name="pass" placeholder="Senha"required/>
      <button id="entrar" name="entrar" type="submit">Entrar</button>
      <p class="message">Não está registrado? <a href="#">Criar conta</a></p>
    </form>
  </div>
</div>



<?php

         $servidor = "localhost";
         $logindb = "root";
         $passdb = "";
         $dbname = "sistemairrigacao";      

$link = mysqli_connect($servidor, $logindb, $passdb, $dbname);
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
        
       if($usuario == "" || $usuario == null){
       echo"<script language='javascript' type='text/javascript'>alert('O campo usuário deve ser preenchido');window.location.href='#';</script>";
        }else{
          if($logarray == $usuario){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário já existente');window.location.href='#';</script>";
            die();
          }else{
            $query = "INSERT INTO usuarios (login,senha,email) VALUES ('$usuario','$senha','$email')";
            $insere = mysqli_query($link,$query);
              }          
            if($insere){
               echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='#'</script>";
            }else{
             echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='#'</script>";
            }
          }
          
        break;

    case 'entrar':

        $login = $_POST['login'];
        $pass = $_POST['pass'];
        
    $get = mysqli_query($link, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$pass'");
    $num = mysqli_num_rows($get);
        
   if ($num == 1){
       while($percorrer = mysqli_fetch_array($get)){
           $nivel = $percorrer['acesso'];
           $nome = $percorrer['login'];
         
           session_start();
           
           if($nivel == 1){
               $_SESSION['nacesso'] = $nome;
                echo '<script type="text/javascript">window.location = "home.php"</script>';
               
           }else{
               $_SESSION['normal'] = $nome;  
           }
              echo '<script type="text/javascript">window.location = "home.php"</script>';
       }
       }else{ 
           
       echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha incorretos!');window.location.href='login.php';</script>";
   } 
        break;
    default:
}
?>

 <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script id="rendered-js">
          $('.message a').click(function () {
  $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});
        </script>
    </body>
</html> 