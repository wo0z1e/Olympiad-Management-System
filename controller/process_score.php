<?php if(isset($_REQUEST["submit"])){


$existingdata = file_get_contents("../data/scoreboard.json");
$phpdata = json_decode($existingdata);
$formdata = array(
    "seg" => $_REQUEST["Seg"],
    "teamname" => $_REQUEST["tname"],
    
    "Innovation"=>$_REQUEST["part1name"], 
    
    "Usability"=>$_REQUEST["part2name"], 
   
    "Cost Impact"=>$_REQUEST["part3name"], 
    

    

);
$phpdata[] = $formdata;

$jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);

if (file_put_contents("../data/scoreboard.json", $jsondata)) {
    echo "Score written successfully";
} else {
    echo "Score written failed";
}
}
?>