<?php 
if(isset($_REQUEST["submit"])){


$existingdata = file_get_contents("../data/events.json");
$phpdata = json_decode($existingdata);
$formdata = array(
"Eventname"=>$_REQUEST["eventname"],
"Eventlocation"=>$_REQUEST["eventloc"],
"Eventpurpose"=>$_REQUEST["eventpur"],
"EventDate-Time"=>$_REQUEST["eventdatetime"],

);
$phpdata[] = $formdata;

$jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);

if (file_put_contents("../data/events.json", $jsondata)) {
    echo "Event written successfully";
} else {
    echo "file written failed";
}
}
?>