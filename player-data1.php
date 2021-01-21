<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable
$arr = array();
$array = array();


$stmte = $pdo->query("SELECT `id`,`name` FROM players");
$rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type:application/json');

echo "A List of Players, their games and their gameplays (Overall for each game..) \n \n";
//echo json_encode($rows, JSON_PRETTY_PRINT);

if (empty($rows)){
    echo "";
}else{
//    $array[] = $arr;
    
//    for ($x = 0; $x < count($rows); $x++){
//        $rows[$x["total"]] = count($rows);
//        echo count($rows) . "\n";
//        $st = $pdo->query("SELECT `id`,`name` FROM players");
//        $array[$arr["id"]] = $rows[$x["id"]];
//        $arr[$arr["Player Name"]] = $rows[$x["name"]];
//        foreach ($res as $key => $value){
//            
//            
//        }
//    }
}
foreach($rows as $result){
//    echo $result;
}

//echo json_encode($rows, JSON_PRETTY_PRINT);

?>