<?php
try{
    // $pdo = new PDO('mysql:host=localhost;port=3306;dbname=game_catalog', 'root', '');
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=erlimite_game_play', 'erlimite_demo1', 'deduceme123#');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error mode for PDO operations.

//    echo "Connected successfully";
}catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>