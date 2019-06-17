<?php
try {
    $host = 'localhost';
    $dbname = 'sistemairrigacao';
    $user = 'root';
    $pass = '';
    
    $pdo = new PDO('mysql:host=' . $host . ';dbname='. $dbname . ';charset=utf8', $user, $pass);
} catch (PDOException $erro) {
    echo "Erro de conexão, detalhe:" . $erro->getMessage();
}

?>