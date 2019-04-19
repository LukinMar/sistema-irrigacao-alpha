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
    <link rel="stylesheet" href="assets/css/faleconosco.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Fale Conosco</title>
</head>
      
     <div class="navbar-fixed">
        <div class="nav-wrapper"></div>

	<div id="menu" class="body">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="sobre.php">Sobre</a></li>
		</ul>
	</div>
    </div>
<div class="container">  
  <form id="contact" action="faleconosco1" method="post">
    <h3>Formulário de contato</h3>
    <h4>Nos contacte para orçamentos e dúvidas</h4>
    <fieldset>
      <input id="nome" name="nome" placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input id="email" name="email" placeholder="Email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="telefonemovel"name="celular"placeholder="Telefone Celular" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input id="telefonecomercial"name="comercial"placeholder="Telefone Comercial" type="tel" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button id="submit" name="submit" type="submit" id="contact-submit" data-submit="Enviando...">Enviar</button>
    </fieldset>
  </form>
</div>
</body>
</html>
//

<?php
/**
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $comercial = $_POST['comercial'];
    $mensagem = $_POST['mensagem'];
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "sistemairrigacao";
     
    $link = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $query_select = "SELECT email FROM contato WHERE email = '$email'";
    $select = mysqli_query($link,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['email'];
    
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Formulário já enviado, aguarde resposta!');window.location.href='faleconosco.php';</script>";
        die();
 
      }else{
     $query = "INSERT INTO contato (nome,email, celular,comercial,mensagem) VALUES ('$nome','$email','$celular','$comercial','$mensagem')";
        $insere = mysqli_query($link,$query);
        
        if($insere){
        echo"<script language='javascript' type='text/javascript'>alert('Formulário enviado com sucesso!');window.location.href='faleconosco.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível enviar o formulário');window.location.href='faleconosco.php'</script>";
        }
      }
   **/