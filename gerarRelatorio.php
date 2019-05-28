<?php
require_once __DIR__ . '/vendor/autoload.php';
use Mpdf\Mpdf;

include('conexao.php');

        date_default_timezone_set('America/Sao_Paulo');
        
        $dataAtual = date('Y-m-d');
        $data = date('Y-m-d H:i:s');
        $timestamp = strtotime($dataAtual);
        $timestampFooter = strtotime($data);
        $dataFormatada = date('d/m/Y',$timestamp);
        $dataFooter = date('d/m/Y H:i:s',$timestampFooter); 
          
        $query = "SELECT * FROM dados WHERE data LIKE '%".$dataAtual."%' ORDER BY data";
               
        $stmt = $pdo->prepare($query);
        $stmt->execute();

$html = 
"<html>
<head>
    <title> Relatório de Leituras</title>
</head>
<style>

h2{
color: #696969;
}

.footer {
    bottom:0;
    width:100%;
    color: #626262;
}

body{
 background-image: url(images/logo_lukinmar_solutions_pdf.png);
 background-position: center;
 background-size:cover;
 background-repeat: no-repeat;
 }
 
table{
    width:100%; 
}

table, th, td{
    border: 1px solid #2e4053;
    border-collapse: collapse;
    text-align: center;
}

th{
    top:0;
    background-color:#3f566e;
    color:#fff;
    height:40px;
}

tr th:nth-child(1){
    text-align: center;
    background:#1f2e3d;
}

tr td:nth-child(1){
    background:#3f566e;
    color:#fff;
}
</style> 
     <body>
        <h2>Relatório de Leituras</h2>
        <hr> 
        <table cellpadding='5'>
        <tr>
        <th>Data/Hora</th>
        <th>Temperatura</th>
        <th>Umidade Relativa</th>
        <th>Umidade do Solo</th>              
        </tr>";

while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
            
    $timestamp = strtotime($linha->data);
    $dataLeitura = date('d/m/Y H:i:s',$timestamp);
    $temperatura = ($linha->temp*100/100);
    $umidadeAr = ($linha->ur*100/100);
    $umidadeSolo = ($linha->us*100/100);
    $html .= 
         "
         <tbody>
         <tr>
         <td>$dataLeitura</td>
         <td>$temperatura ºC</td>
         <td>$umidadeAr%</td>
         <td>$umidadeSolo%</td>
         </tr>";
}
 
    
$html = $html . "</tbody> </table> </div>"
        . "      <div class='footer'>"
        . "         <hr><p> Gerada em: $dataFooter </p>"
        . "      </div class='footer'> "
        . "</body>"
        . "</html>";



/* Propriedades do documento PDF */
$mpdf = new mPDF();
$mpdf->SetAuthor('LukinMar_Solutions'); // Autor
$mpdf->SetSubject("Relatório"); //Assunto
$mpdf->SetTitle('Relatório de Leituras'); //Titulo

$mpdf-> WriteHTML($html);
$mpdf->Output('relatorio-leitura.pdf','I'); // I para abrir no navegador, D para salvar direto


?>


