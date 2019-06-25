<?php
    include('validar-usuario.php');
?>
<!DOCTYPE html>
<html>
   <head>     
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2e4053">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://kit.fontawesome.com/e97cfc6afc.js"></script>
    <link rel="stylesheet" href="assets/css/dados.css"/>
    <meta charset="utf-8">
    <title>Banco de Dados</title>
    </head>
    <body class="body">
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
        <div class="container"> 
           <div class="form">
            <form action="" method="POST">
            <div class="input-group">
            <input  class="form-control" type ="text" name="data" placeholder="mês/ano">
            <div class="input-group-append">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <button name="relatorio" type="button" class="button" onclick="window.open('gerarRelatorio.php',' ');"> <i class='fas fa-file-pdf'></i> &nbsp Relatório</button>
            <button class="button" type="button" onclick="location.href='home.php';"><i class="fas fa-backward"></i></button>
            </div>  
            </div>
            </div>
            </form>
    <div class="table-box">
        <?php
        include ('conexao.php');
        
        date_default_timezone_set('America/Sao_Paulo');
            
        if($_SERVER['REQUEST_METHOD'] == "POST"){
          $dataPesquisa = $_POST['data'];
          $dataArray = explode("/",$dataPesquisa);
          if($dataPesquisa == null) {
              $dataPesquisa = $dataArray [0] . "-" . $dataArray [0];  
          } else {
              $dataPesquisa = $dataArray [1] . "-" . $dataArray [0];         
          }
          //echo "Data da Pesquisa: " . $dataPesquisa;
         $query = "SELECT * FROM dados WHERE data LIKE '%".$dataPesquisa."%' ORDER BY data"; // LIKE 
        }else {
          $dataAtual = date('Y-m-d');
          $timestamp = strtotime($dataAtual);
          $dataFormatada = date('d/m/Y',$timestamp);
          
          $query = "SELECT * FROM dados WHERE data LIKE '%".$dataAtual."%' ORDER BY data";
        }
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        echo "<table border='1' cellpadding='5'>";
        echo "<tr>
                <th>Data/Hora</th>
                <th>Temperatura</th>
                <th>Umidade Relativa</th>
                <th>Umidade do Solo</th>              
            </tr>";
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
            
            $timestamp = strtotime($linha->data);
            $dataTabela = date('d/m/Y H:i:s',$timestamp);
            echo "<tr>";
            echo "<td>".$dataTabela."</td>";   
            echo "<td>".($linha->temp*100/100)." ºC</td>";
            echo "<td>".($linha->ur*100/100)."%</td>";   
            echo "<td>".$linha->us."%</td>";   
            echo "</tr>";
}
        echo "</table>";
        ?>
    </div>
    </div>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

    </body>
</html>