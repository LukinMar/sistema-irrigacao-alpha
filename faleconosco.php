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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Fale Conosco</title>

    <style>       
        
        body {
          line-height: 30px;
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
        
        .containers {
          max-width: 400px;
          width: 100%;
          margin: 0 auto;
          position: relative;
        }

        #contacts input[type="text"],
        #contacts input[type="email"],
        #contacts input[type="tel"],
        #contacts input[type="url"],
        #contacts textarea,
        #contacts button[type="submit"] {
          font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #contacts {
          background: #fff;
          padding: 25px;
          margin: 90px 0;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #contacts h3 {
          display: block;
          font-size: 30px;
          font-weight: 300;
          margin-bottom: 10px;
        }

        #contacts h4 {
          margin: 5px 0 15px;
          display: block;
          font-size: 13px;
          font-weight: 400;
        }

        .fs {
          border: medium none !important;
          margin: 0 0 10px;
          min-width: 100%;
          padding: 0;
          width: 100%;
        }

        #contacts input[type="text"],
        #contacts input[type="email"],
        #contacts input[type="tel"],
        #contacts input[type="url"],
        #contacts textarea {
          width: 100%;
          margin: 0 0 5px;
          padding: 10px;
          height: auto;
         box-sizing: inherit;
        }

        #contacts textarea {
          height: 100px;
          max-width: 100%;
          resize: none;
        }

        #contacts button[type="submit"] {
          cursor: pointer;
          width: 100%;
          border: none;
          background: #2e4053;
          color: #FFF;
          margin: 0 0 5px;
          padding: 10px;
          font-size: 15px;
        }

        #contacts button[type="submit"]:hover {
          background: #3f566e;
        }

        #contacts button[type="submit"]:active {
          box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
          text-align: center;
        }

        #contacts input:focus,
        #contacts textarea:focus {
          outline: 0;
        }

        ::-webkit-input-placeholder {
          color: #888;
        }

        :-moz-placeholder {
          color: #888;
        }

        ::-moz-placeholder {
          color: #888;
        }

        :-ms-input-placeholder {
          color: #888;
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
        <a href="#" class="brand-logo"> &nbsp; &nbsp;Fale Conosco</a>
        <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
         </a>
    <ul class="right hide-on-med-and-down">
             <li><a href="index.php">HOME</a></li>            
             <li><a href="login.php">LOGIN</a></li>

    </ul>
    <ul class="side-nav" id="menu-mobile">
              <li><a href="index.php"><i class="material-icons">home</i>HOME</a></li>
             <hr>
             <li><a href="login.php"><i class="material-icons">person</i>LOGIN</a></li>
    </ul>
     </div>
 </nav>
    

<div class="containers">  
  <form id="contacts" action="faleconosco1.php" method="post">
    <h3>Formulário de contato</h3>
    <h4>Nos contacte para orçamentos e dúvidas</h4>
    <fieldset class="fs">
      <input id="nome" name="nome" placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset class="fs">
      <input id="email" name="email" placeholder="Email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset class="fs">
      <input id="telefonemovel"name="celular"placeholder="Telefone Celular" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset class="fs">
      <input id="telefonecomercial"name="comercial"placeholder="Telefone Comercial" type="tel" tabindex="4" required>
    </fieldset>
    <fieldset class="fs"> 
      <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui" tabindex="5" required></textarea>
    </fieldset>
    <fieldset class="fs">
      <button id="submit" name="submit" type="submit" id="contact-submit" data-submit="Enviando...">Enviar</button>
    </fieldset>
  </form>
</div>
</body>
<script>
 $(function(){
     $(".button-collapse").sideNav();
 });
</script>
</html>
<?php
?>