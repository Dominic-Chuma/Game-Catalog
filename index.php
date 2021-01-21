<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable
$array = array();

$stmte = $pdo->query("SELECT `id`,`name`,`version`,DATE_FORMAT(DATE(`date-added`), '%M %D, %Y') as date FROM games");
$rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type:application/json');
//echo "<pre>";
//echo "A List of All Registered Games \n \n";
//echo "</pre>";

echo json_encode($rows, JSON_PRETTY_PRINT);
//$array[]


?>