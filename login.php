<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <title>Login</title>
        <style>
            		.body {
			padding:0px;
			margin:0px;
		}
            
            #body{
                background-color:#00CED1;
            }            
            #box{
                background-color:#fdfdfd;
                border: 5px solid #40E0D0;
                align-items: center;
                box-shadow: 0px 0px 5px black;
                overflow:hidden;
                width:380px;
                height:260px;
                margin:140px auto 0px;
                border-radius:15px;
            }

            #box-label{
                height:45px;
                text-align:center;
                font:bold 14px/45px sans-serif;
                border-top-left-radius:5px;
                border-top-right-radius:5px;
                background: #f6f8f9;
                background: -moz-linear-gradient(top, #f6f8f9 0%, #e5ebee 50%, #d7dee3 51%, #f5f7f9 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=0 ); /* IE6-9 */
                border-bottom: 1px solid #bfc3c5;
                box-shadow: 1px 0px 3px #dedede;
                color:#555555;
                text-shadow:1px 0px 1px white;
            }
            
            input[type=submit]{
            width:20%;
            color:#fff;
            background-color:#00CED1;
            cursor:pointer;
            border-radius: 5px;
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
    
    <body id="body">
        
                <div class="navbar-fixed">
          <div class="nav-wrapper"></div>

	<div id="menu" class="body">
		<ul>
			<li><a href="home.php">Home</a></li>
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
			<li><a href="sobre.php">Sobre</a></li>
		</ul>
	</div>
    </div>
        <div id="box">           
                <div id="box-label"> Login 
             <form method="post" action="" id="centro"><br>
             <input type="text" name="login" placeholder="Usuário" value=""/><br>
             <input type="password" name="senha" placeholder="Senha"/><br>
             <input type="submit" value="ENTRAR"/>
        </form>
        </div>
        </div>
        </div><br><br>
    </body>
</html>


<?php

     $link = mysqli_connect('localhost', 'root', '') or die (mysqli_error());
     $dbname = ('sistemairrigacao');
     mysqli_select_db($link, $dbname);
    
    if (isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
    
    $get = mysqli_query($link, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
    $num = mysqli_num_rows($get);
        
   if ($num == 1){
       while($percorrer = mysqli_fetch_array($get)){
           $nivel = $percorrer['acesso'];
           $nome = $percorrer['login'];
         
           session_start();
           
           if($nivel == 1){
               $_SESSION['nacesso'] = $nome;
                echo '<script type="text/javascript">window.location = "index.php"</script>';
               
           }else{
               $_SESSION['normal'] = $nome;  
           }
              echo '<script type="text/javascript">window.location = "index.php"</script>';
       }
       }else{ 
           
       echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha incorretos!');window.location.href='login.php';</script>";
   }
  }