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
    <link rel="stylesheet" href="assets/css/dados.css"/>
    <meta charset="utf-8">
    <title>Banco de Dados</title>
    </head>
    <body class="body">
<div class="container"> 
        <div class="form">
            <form action="" method="POST"><br>
            <input type ="text" name="data" placeholder="mês/ano">
            <input type ="submit" name="submit" value ="Buscar">
            <input type ="button" name="relatorio" value="Relatório"  onclick="window.open('gerarRelatorio.php',' ');">
            <input type ="button" name="voltar" value="Voltar" onclick="location.href='home.php';">
        </form>
        </div>
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
    </body>
</html>
