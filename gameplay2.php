<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable
$array = array();

$stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, games.name as Game_Name, games.version, DATE_FORMAT(DATE(gameplays.date), '%M %D, %Y') as Date FROM games INNER JOIN gameplays ON games.id = gameplays.game_id WHERE gameplays.date BETWEEN DATE('2010-01-01') and DATE('2010-01-28') 
");
$rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type:application/json');
//echo "<pre>";
//echo "A List of All Registered Games \n \n";
//echo "</pre>";

echo json_encode($rows, JSON_PRETTY_PRINT);
//$array[]


?>