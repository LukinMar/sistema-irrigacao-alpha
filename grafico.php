<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "sistemairrigacao");
$query = '
SELECT temp, ur, us, UNIX_TIMESTAMP(CONCAT_WS(" ", data)) AS datetime 
FROM dados ORDER BY data';
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
 array(
  'label' => 'Horário', 
  'type' => 'datetime'
 ),
 array(
  'label' => 'Temperature (°C)', 
  'type' => 'number'
 ),
  array(
  'label' => 'Umidade Relativa (%)', 
  'type' => 'number'
 ),
     array(
  'label' => 'Umidade do Solo (%)', 
  'type' => 'number'
 )
);

while($row = mysqli_fetch_array($result))
{

 $sub_array = array();
 $datetime = explode('.', $row["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row["temp"]
     );
  $sub_array[] =  array(
      "v" => $row["ur"]
     );
   $sub_array[] =  array(
      "v" => $row["us"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);

?>


<html>
 <head>
  <meta http-equiv="refresh" content="10;url=grafico.php">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">   
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var options = {
     title:'Histórico dos Sensores',
     legend:{position:'bottom'},
     chartArea:{width:'95%', height:'65%'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

    chart.draw(data, options);
   }
  </script>
  <style>
  .page-wrapper
  {
   width:1000px;
   margin:0 auto;
  }
  </style>
 </head>  
 <body>
  <div class="page-wrapper">
   <br />
   <h2 align="center"></h2>
   <div id="line_chart" style="width: 100%; height: 500px"></div>
  </div>
 </body>
</html>
