<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sensores</title>
   <!-- <meta http-equiv="refresh" content="2;url=controle.php"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <style>
      body{
        background-color: #E0E0E0;
      }
      nav .brandlogo {
    position: absolute;
    color: #fff;
    display: inline-block;
    right: 0.5rem;
    left: auto;
    padding: 0;
  
}
          input[type=button]{
         background-color:  #00CED1;
         cursor:pointer;
         border-radius: 5px;
         border-style:none;
      }

      .content {
        margin-top: 30px;
      }

      nav {
        background-color: #00CED1;
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

    </style>
  </head>
  <body>
             <?php
        include ('conexao.php');
        
        date_default_timezone_set('America/Sao_Paulo');
          $dataAtual = date('Y-m-d'); // mostra no mesmo segundo
          $timestamp = strtotime($dataAtual);
          $dataFormatada = date('d/m/Y',$timestamp);

          $query = "SELECT * FROM dados WHERE data LIKE '%".$dataAtual."%'";
          
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
            
            $timestamp = strtotime($linha->data);

?>
<form method="GET">
    <div class="navbar-fixed">
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <a class="brand-logo center">Sensores</a>
           <a class="brandlogo">
               <input type="button" value="Voltar" onclick="location.href='index.php';"></a>
          <a> <?php 
          echo"&nbsp &nbsp";
          echo " Data Atual: " . $dataFormatada;?></a>     
          </p>
        </div>
      </nav>
    </div>
           <!--    TEMPERATURA    -->
    <div class="container content">
      <br/>
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image center">
              <span class="statistic"> <?php echo $linha->temp; ?></span>
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
              <span class="statistic"><?php echo $linha->ur; ?></span>
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
        </div>
        <!-- ATIVAÇÃO RELE -->
        <div class="col s12 m6">
          <div class="card" style="padding-bottom:40px">
            <div class="card-image center">
              <i id="currentLamp" class="material-icons statistic">flash_on</i>
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4">
                Rega Manual
              </span>
                <input type="button" value="Ligar" class="waves-effect waves-light btn col s12" id="btn-lamp" class="material-icons left"onclick="window.location.href='/ligar'">
              </a>
            </div>
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