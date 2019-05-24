<?php
require_once __DIR__ . '/vendor/autoload.php';
use Mpdf\Mpdf;

include('conexao.php');

$html = 
"<html>
<head>
    <link rel='apple-touch-icon' sizes='180x180' href='images/apple-touch-icon.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='images/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='images/favicon-16x16.png'>
    <link rel='manifest' href='images/site.webmanifest'>
    <link rel='mask-icon' href='/safari-pinned-tab.svg' color='#5bbad5'>
    <meta name='msapplication-TileColor' content='#00aba9'>
    <meta charset='utf-8'>
    <title> Relatório de Leituras</title>
</head>
<style>
body{
 background-image: url(images/logo_lukinmar_solutions_pdf.png);
 background-position: center;

 background-size:cover;
 background-repeat: no-repeat;
 }
table{
    width:100%;
    background:#fff;
}

table, th, td{
    border: 1px solid #2e4053;
    border-collapse: collapse;
    text-align: center;
}

th{
    position: sticky;
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

::-webkit-scrollbar {
}

::-webkit-scrollbar-track {
box-shadow: inset 0 0 10px #2e4053;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background: #3f566e; 
box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}


</style> 
     <body>
        <h1>Relatório de Leituras</h>
        <hr> 
        <table align='center'>
        <tr>
        <th>Data/Hora</th>
        <th>Temperatura</th>
        <th>Umidade Relativa</th>
        <th>Umidade do Solo</th>              
        </tr>";

 $html = $html . "
        <tr>
        <td>".$dataTabela."</td>
        <td>".($linha->temp*100/100)." ºC</td>
        <td>".($linha->ur*100/100)."%</td>
        <td>".$linha->us."%</td>
        </tr>
        </table>";
    
$html = $html . "</body></html>";
/* Propriedades do documento PDF */
$mpdf = new mPDF();
$mpdf->SetAuthor('LukinMar_Solutions'); // Autor
$mpdf->SetSubject("Relatório"); //Assunto
$mpdf->SetTitle('Relatório de Leituras'); //Titulo

$mpdf-> WriteHTML($html);
$mpdf-> Output();

?>


