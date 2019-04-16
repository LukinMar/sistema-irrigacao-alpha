
<?php
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('Y-m-d'); 
        $timestamp = strtotime($dataAtual);
        $dataFormatada = date('d/m/Y',$timestamp);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sensores</title>
    <meta http-equiv="refresh" content="60;url=controle.php">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/materialize.css" />
   <!--<link rel="stylesheet" type href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
    <script>
		// Realiza um disparo via Ajax para o endereço do meu NodeMcu
	    var rele_controle = function(status) {
	        var xmlhttp = new XMLHttpRequest();
	        var set_status = "http://192.168.1.125/?function=" + status;
	        xmlhttp.open("GET", set_status);
	        xmlhttp.send();
	    }
        
           // Acessa os botões e passando as nossas diretivas de ligar ou desligar o led 
	    var rele = function() {
	    	var ligar = document.querySelector(".ligar");
	    	    ligar.onclick = function() {
	    	    	led_controle("rele_on");
	    	    }
	    }
	</script>
    </script>
    <style>
      body{
        background-color: #E0E0E0;
      }
      .loading{
          
      }
      nav .brandlogo {
    position: absolute;
    color: #fff;
    display: inline-block;
    right: 0.5rem;
    left: auto;
    padding: 0;
     z-index:1000;
  
}
          input[type=button]{
         background-color:  #26a69a;
         cursor:pointer;
         border-radius: 5px;
         border-style:none;
         color:#fff;
      }

      .content {
        margin-top: 30px;
      }

      nav {
        background-color: #26a69a;
      }

      .statistic {
        font-size: 8em;
        margin-top: 15px !important;
      }

      .card {
        min-height: 250px;
      }

      .activator {
        cursor: pointer;
      }

      @media screen and (max-width: 600px){
        .statistic {
          font-size: 5em;
        }
      }
.spinner {
  margin: 100px auto;
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 10px;
  position: relative;
  margin: 0 auto;
  top: 750px; /*CONTROLE AQUI A DISTANCIA*/
  display:block;
}

.spinner > div {
    
  background-color: #2bbbad;;
  height: 100%;
  width: 6px;
  display: inline-block;
  
  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.spinner .rect3 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
  
}

.spinner .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes sk-stretchdelay {
  0%, 40%, 100% { 
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }  20% { 
    transform: scaleY(1.0);
    -webkit-transform: scaleY(1.0);
  }
}

    </style>
  </head>
  <body>
  <form method="GET">

      <div class="navbar-fixed">
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <a class="brand-logo center">Sensores</a>
           <a class="brandlogo">
               <input type="button" value="Voltar" onclick="location.href='home.php';"></a>
                    <a> <?php 
          echo"&nbsp &nbsp";
          echo $dataFormatada;?></a>     
          </p>
        </div>
      </nav>
    </div>
      
<div id="spi" class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
      
<!--
            <?php
        include ('conexao.php');

        $query = "SELECT * FROM dados WHERE data LIKE '%".$dataAtual."%'";
        
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
            
            $timestamp = strtotime($linha->data);

?>
      

           <!--    TEMPERATURA    -->
    <div class="container content" style="z-index:1000;">
      <br/>
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image center">
              <span class="statistic"> <?php echo ($linha->temp*100/100); ?></span>
              <span class="statistic">ºC</span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Temperatura</span>
            </div>
          </div>
        </div>
          <!-- UMIDADE RELATIVA DO AR -->
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image center">
              <span class="statistic"><?php echo ($linha->ur*100/100); ?></span>
              <span class="statistic">%</span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">
                Umidade Relativa
              </span>
            </div>
          </div>
        </div>
          <!-- UMIDADE DO SOLO -->          
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image center">
              <span class="statistic"><?php echo $linha->us; ?></span>
              <span class="statistic">%
              </span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">
                Umidade do Solo
              </span>
            </div>
          </div>
        </div>        <!-- ATIVAÇÃO RELE -->
        <div class="col s12 m6">
          <div class="card" style="padding-bottom:40px">
            <div class="card-image center">
              <i id="currentLamp" class="material-icons statistic">flash_on</i>
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4">
                Rega Manual
              </span>
                <a class="waves-effect waves-light btn col s12" class="buttons ativar" id="btn-lamp">
                <i class="material-icons left">flash_on</i> Ativar
              </a>
            </div>
          </div>
        </div>
                <a class="waves-effect waves-light btn col s12" id="btn-lamp"onclick="location.href='grafico.php'">
                <i class="material-icons left">show_chart</i> Gráfico
              </a>
        </div>
    </div>
    </div>
      </div>
</form>

   
  </body>
</html>
<?php
        }
        ?>