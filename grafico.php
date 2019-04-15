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
  'label' => 'Temperatura (°C)', 
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
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
  <meta http-equiv="refresh" content="60;url=grafico.php">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
  
.btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
    font-size: 14px;
    outline: 0;
}

.btn, .btn-large, .btn-small {
    text-decoration: none;
    color: #fff;
    background-color: #26a69a;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
    cursor: pointer;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out;
}
.btn, .btn-large, .btn-small {
    text-decoration: none;
    color: #fff;
    background-color: #26a69a;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
    cursor: pointer;
}
.btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
    font-size: 14px;
    outline: 0;
}
.btn, .btn-large, .btn-small, .btn-flat {
    border: none;
    border-radius: 2px;
    display: inline-block;
    line-height: 36px;
    padding: 0 16px;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}
.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
}
a {
    text-decoration: none;
}
a {
    color: #039be5;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
}
a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
*, *:before, *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

html {
    line-height: 1.5;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    font-weight: normal;
}
html {
    line-height: 1.15;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
*, *:before, *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
*, *:before, *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.btn i, .btn-large i, .btn-small i, .btn-floating i, .btn-large i, .btn-small i, .btn-flat i {
    font-size: 1.3rem;
    line-height: inherit;
}
i.left {
    float: left;
    margin-right: 15px;
}
.material-icons {
    text-rendering: optimizeLegibility;
    -webkit-font-feature-settings: 'liga';
    -moz-font-feature-settings: 'liga';
    font-feature-settings: 'liga';
}
.left {
    float: left !important;
}
.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
}
i {
    line-height: inherit;
}
*, *:before, *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
user agent stylesheet
i, cite, em, var, address, dfn {
    font-style: italic;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out;
}
.btn, .btn-large, .btn-small {
    text-decoration: none;
    color: #fff;
    background-color: #26a69a;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
    cursor: pointer;
}
.btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
    font-size: 14px;
    outline: 0;
}
.btn, .btn-large, .btn-small, .btn-flat {
    border: none;
    border-radius: 2px;
    display: inline-block;
    line-height: 36px;
    padding: 0 16px;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}
a {
    color: #039be5;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
}
.btn:hover, .btn-large:hover, .btn-small:hover {
    background-color: #2bbbad;
}
  </style>
 </head>  
 <body>
  <div class="page-wrapper">
   <br />
   <h2 align="center"></h2>
   <div id="line_chart" style="width: 100%; height: 500px"></div>
   <a class="waves-effect waves-light btn col s12" id="btn-voltar"onclick="location.href='controle.php'">
                <i class="material-icons left">chevron_left</i> Voltar
  </div>
 </body>
</html>
