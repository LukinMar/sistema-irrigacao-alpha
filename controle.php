
<?php
        include('validar-usuario.php');
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
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2e4053">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e97cfc6afc.js"></script>
    <link rel="stylesheet" href="assets/css/materialize.css" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <style>

    .btn, .btn-large, .btn-small, .btn-flat {
    border: none;
    border-radius: 50px;
    display: inline-block;
    line-height: 36px;
    padding: 0 16px;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}   

.btn:hover, .btn-large:hover, .btn-small:hover {
        background: #fff;
        color:#2e4053;
}

.voltar{   
font-family: "Roboto", sans-serif;
font-weight: normal;
}

    </style>

  </head>
  <body>
  <form method="GET" action="192.168.1.25">
    <div class="navbar-fixed">
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <a class="brand-logo center">Sensores</a>
          <a class="brandlogo">
            <input type="button" class="voltar" value="VOLTAR" onclick="location.href='home.php';"></a>
          <a> 
<?php 
  echo"&nbsp &nbsp";
  echo $dataFormatada;?></a>     
          </p>
         </div>
      </nav>
    </div>
     
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
        
<?php
  include ('conexao.php');

  $query = "SELECT * FROM dados WHERE data LIKE '%".$dataAtual."%'";       
  $stmt = $pdo->prepare($query);
  $stmt->execute();
    while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
      $timestamp = strtotime($linha->data);
?>
 
    <div class="container">
      <br/>

      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image center">
              <span class="statistic" id="celsius"> <?php echo ($linha->temp*100/100); ?> ºC</span>
              <span class="statistic" id="fahrenheit" style="display:none"> <?php $fahrenheit = (($linha->temp*9/5) + 32); echo bcdiv($fahrenheit, 1, 1); ?> ºF</span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Temperatura
              <i  class="fa fa-thermometer-half right" onClick="toggleTemperature();"></i>
              <i  class="material-icons right">more_vert</i>
              </span>
            </div>
          </div>
        </div>

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

        <div class="col s12 m6">
          <div class="card" style="padding-bottom:40px">
            <div class="card-image center">
              <i id="currentRele" class="material-icons statistic">flash_on</i>
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4">
                Rega Manual
              </span>
                <a class="waves-effect waves-light btn col s12" id="btn-rele">
                <i id="currentRele" class="material-icons left">flash_on</i> Ativar
              </a>
            </div>
          </div>
        </div>
                <a class="waves-effect waves-light btn col s12" onclick="location.href='grafico.php'">
                <i class="fas fa-chart-line left"></i> Gráfico</a>
                
  </form>
</body>
<script src="assets/js/controle.js"></script>
</html>

<?php
  }
?>