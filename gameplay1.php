<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable
$array = array();

$stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, games.name as Game_Name, games.version, gameplays.date as Play_Date, players.name as Player_Name FROM ((games INNER JOIN gameplays ON games.id = gameplays.game_id) INNER JOIN players ON players.id = gameplays.player_id) LIMIT 5000");

$rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type:application/json');
//echo "<pre>";
//echo "A List of All Registered Games \n \n";
//echo "</pre>";

echo json_encode($rows, JSON_PRETTY_PRINT);


?>