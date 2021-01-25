<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable

$nonsense = array();
$nonsense1 = array();
$nonsense2 = array();
$nonsense3 = array();
$nonsense4 = array();

$array = array();


for($x = 1; $x <= 10007; $x++){
    
    $stmte = $pdo->query("SELECT player_id, player_name, game_name, COUNT(DISTINCT date) as No_Of_plays FROM (SELECT players.name AS player_name, pee.name as game_name, pee.player_id, pee.date FROM (SELECT newtable.player_id, games.name, newtable.date FROM (SELECT * FROM (SELECT `player_id`,`game_id`, `date` FROM gameplays ) as Month ORDER BY player_id) as newtable LEFT JOIN games ON games.id = newtable.game_id ORDER BY newtable.player_id) AS pee INNER JOIN players ON players.id = pee.player_id ) as final WHERE player_id = " . $x . " GROUP BY game_name ");
    
    $rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
    
        
    if (empty($rows)){
        
        continue;
        
    }else{
        
        $game_stats = array();
        $nonsense = array();
        $arr = array();
        
        for ($y = 0; $y < 5; $y++){

            $nonsense["game_name"] = $rows[$y]["game_name"];
            $nonsense["No_Of_plays"] = $rows[$y]["No_Of_plays"];
            array_push($game_stats,$nonsense);
//            unset($nonsense);
            continue;
        }
        
//        var_dump($game_stats);
        foreach($rows as $data){
            
            if (empty($arr)){
                $arr["player_id"] = $data["player_id"];
                $arr["player_name"] = $data["player_name"];
                break;
                
            }else{
                
                unset($arr);
                $arr["player_id"] = $data["player_id"];
                $arr["player_name"] = $data["player_name"];
                
                break;
            }
            
        }
        
        $arr["player_stats"] = $game_stats;

        array_push($array, $arr);

    }
    
    
    
}

//var_dump($array);

header('Content-Type:application/json');

//echo "A List of Players, their games and their gameplays (Overall for each game..) \n \n";

echo json_encode($array, JSON_PRETTY_PRINT);

?>