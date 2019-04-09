<?php
    include ('conexao.php');
    
    $temp = $_GET['temp'];
    $ur   = $_GET['ur'];
    $us   = $_GET['us'];
    
    $sql = "INSERT INTO dados (temp, ur, us) VALUES (:temp, :ur, :us)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':temp',$temp);
    $stmt->bindParam(':ur',$ur);
    $stmt->bindParam(':us',$us);
    
    if($stmt->execute()){
        echo "Salvo com sucesso";
    }else{
        echo "Erro ao salvar";
    }
            