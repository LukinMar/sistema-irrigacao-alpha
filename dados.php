<!DOCTYPE html>
<html>
   <head>
       
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta charset="utf-8">
    <title>Banco de Dados</title>
    </head>
    <style>
        
        .body{
          align-items:center;
         background-color:#2bbbad;
        }
        .container{
         margin: 0 auto;
         background-color:#2bbbad;
         flex-direction: row;
         justify-content: center;
         align-items: center
        }
        
        .form{
            text-align:center;
            border-radius:5px;
            padding:10px;
        }
        input {
            padding:10px;
            margin:8px 0;
            border:1px solid #000;
            border-radius:4px;
        }
        input[type=text]{
            width:60px;
            text-align:center;
        }
        
        input[type=submit]{
            width:60px;
            color:#fff;
            background-color:#26a69a;
            cursor:pointer;
        }
        table{
            border-collapse: collapse;
            width:100%;
            margin-top:10px;
            text-align:center;
            background-color:#fff;
        }
        
         input[type=button]{
         background-color:  #2bbbad;
         cursor:pointer;
         border-radius: 5px;
         border-style:none;
         color:#fff;
          right: 0.5rem;
          left: auto;
      }

      p{
          color:#fff;
      }
        table th{
            height:30px;
            background-color:#26a69a;
            color:#fff;
        }
    </style>
    <body class="body">
<div class="container">
        <div class="form">
        <form action="" method="POST"><br>
            <input type ="text" name="data" placeholder="mês/ano">
            <input type ="submit" name="submit" value ="Buscar">
            <input type ="button" name="voltar" value="Voltar" onclick="location.href='home.php';">
        </form>
        </div>
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
          ?>
    
        <p> <?php   echo $dataFormatada;?>
                </p>
          <?php
        }
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        echo "<table border='1' text-align='center'>";
        echo "<tr>
                <th>Temperatura</th>
                <th>Umidade Relativa</th>
                <th>Umidade do Solo</th>
                <th>Data/Hora</th>
            </tr>";
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
            
            $timestamp = strtotime($linha->data);
            $dataTabela = date('d/m/Y H:i:s',$timestamp);
            echo "<tr>";
            echo "<td>".($linha->temp*100/100)." ºC</td>";
            echo "<td>".($linha->ur*100/100)."%</td>";   
            echo "<td>".$linha->us."%</td>";   
            echo "<td>".$dataTabela."</td>";   
            echo "</tr>";
}
        echo "</table>";
        ?>
    </div>
    </body>
</html>