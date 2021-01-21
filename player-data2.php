<?php

// Call in connection to the database
require_once "pdo.php";

// initialize the JSON array variable
$finalarray = array();

$array = array();

$year = array(2010);
$year2 = array(2011);

$month = array(1,2,3,4,5,6,7,8,9,10,11,12);

$num1 = 1;
$num2 = 28;

//print_r($arr1) Counter Variable Initialization;
$counter = 0;

foreach($year as $y){
    foreach($month as $m){
        
        // List of Months
        $arr = array('January 2010','February 2010','March 2010','April 2010','May 2010','June 2010','July 2010','August 2010','September 2010','October 2010','November 2010','December 2010');
        
        if ($m < 9){
            $stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, players.name as Player_Name, 
                            DATE_FORMAT(DATE(gameplays.date), '%M, %Y') as Month, gameplays.player_id , COUNT(gameplays.player_id) as No_of_Games_Played FROM players 
                            RIGHT JOIN gameplays ON players.id = gameplays.player_id WHERE gameplays.date BETWEEN DATE('" . $y . "-0" . $m . "-0" . $num1 . "') and DATE('" . $y . "-0" . $m . "-0" . $num2 . "') 
                            GROUP BY gameplays.player_id 
                            ORDER BY COUNT(gameplays.player_id) DESC LIMIT 100");
            $rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
            if(!$rows){
                continue;
            }else{
                
                array_push($array,$rows);
//                $array[$arr[$counter]] = $rows;
//                
//                $counter++;
            }
        }else{
            
            $stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, players.name as Player_Name, 
                            DATE_FORMAT(DATE(gameplays.date), '%M, %Y') as Month, gameplays.player_id , COUNT(gameplays.player_id) as No_of_Games_Played FROM players 
                            RIGHT JOIN gameplays ON players.id = gameplays.player_id WHERE gameplays.date BETWEEN DATE('" . $y . "-" . $m . "-" . $num1 . "') and DATE('" . $y . "-" . $m . "-" . $num2 . "') 
                            GROUP BY gameplays.player_id 
                            ORDER BY COUNT(gameplays.player_id) DESC LIMIT 100");
            $rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
            if(!$rows){
                continue;
            }else{
                
                array_push($array,$rows);
//                $array[$arr[$counter]] = $rows;
//                
//                $counter++;
            }
            
        }
    }
}

// 2nd Loop..............
$count = 0;
foreach($year2 as $y){
    foreach($month as $m){
        
        // List of Months
        $arr = array('January','February','March','April','May','June','July','August','September','October','November','December');
        
        if ($m < 9){
            $stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, players.name as Player_Name, 
                            DATE_FORMAT(DATE(gameplays.date), '%M, %Y') as Month, gameplays.player_id , COUNT(gameplays.player_id) as No_of_Games_Played FROM players 
                            RIGHT JOIN gameplays ON players.id = gameplays.player_id WHERE gameplays.date BETWEEN DATE('" . $y . "-0" . $m . "-0" . $num1 . "') and DATE('" . $y . "-0" . $m . "-0" . $num2 . "') 
                            GROUP BY gameplays.player_id 
                            ORDER BY COUNT(gameplays.player_id) DESC LIMIT 100");
            $rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
            if(!$rows){
                continue;
            }else{
                
                array_push($array,$rows);
//                $array[$arr[$count]] = $rows;
//                
//                $count++;
            }
        }else{
            
            $stmte = $pdo->query("SELECT gameplays.id as GamePlay_id, players.name as Player_Name, 
                            DATE_FORMAT(DATE(gameplays.date), '%M, %Y') as Month, gameplays.player_id , COUNT(gameplays.player_id) as No_of_Games_Played FROM players 
                            RIGHT JOIN gameplays ON players.id = gameplays.player_id WHERE gameplays.date BETWEEN DATE('" . $y . "-" . $m . "-" . $num1 . "') and DATE('" . $y . "-" . $m . "-" . $num2 . "') 
                            GROUP BY gameplays.player_id 
                            ORDER BY COUNT(gameplays.player_id) DESC LIMIT 100");
            $rows = $stmte->fetchAll(PDO::FETCH_ASSOC);
            if(!$rows){
                continue;
            }else{
                
                array_push($array,$rows);
//                $array[$arr[$counter]] = $rows;
//                
//                $counter++;
            }
            
        }
    }
}


//array_push($finalarray,$array);

header('Content-Type:application/json');

//echo " This is the list of the TOP 100 players per month for far..... \n \n";

echo json_encode($array, JSON_PRETTY_PRINT);


?>