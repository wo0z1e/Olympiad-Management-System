<?php if(isset($_REQUEST["submit"])){


$existingdata = file_get_contents("../data/team_details.json");
$phpdata = json_decode($existingdata);
$formdata = array(
    "segment" => $_REQUEST["Seg"],
    "teamname" => $_REQUEST["tname"],
    "teamleader"=>$_REQUEST["tlead"], 
    "tleaderemail"=>$_REQUEST["tleademail"], 
    "participant1name"=>$_REQUEST["part1name"], 
    "participant1email"=>$_REQUEST["part1email"], 
    "participant2name"=>$_REQUEST["part2name"], 
    "participant2email"=>$_REQUEST["part2email"],
    "participant3name"=>$_REQUEST["part3name"], 
    "participant3email"=>$_REQUEST["part3email"],

    "participant4name"=>$_REQUEST["part4name"], 
    "participant4email"=>$_REQUEST["part4email"],

    "participant5name"=>$_REQUEST["part5name"], 
    "participant5email"=>$_REQUEST["part5email"],

);
$phpdata[] = $formdata;

$jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);

if (file_put_contents("../data/team_details.json", $jsondata)) {
    echo "file written successfully";
} else {
    echo "file written failed";
}
}
?>