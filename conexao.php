<?php
try {
    $host = 'ec2-50-19-127-115.compute-1.amazonaws.com';
    $dbname = 'de8msggjb5bkg';
    $user = 'btitzqmyqfdjfl';
    $pass = '1b76f41706bfe03e2c7a367748d50dfa30513a4583cdd5e29a794a4c5f76a04a';
    
    $pdo = new PDO('mysql:host=' . $host . ';dbname='. $dbname . ';charset=utf8', $user, $pass);
} catch (PDOException $erro) {
    echo "Erro de conexão, detalhe:" . $erro->getMessage();
}
