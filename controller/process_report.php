<?php if(isset($_REQUEST["submit"])){


$existingdata = file_get_contents("../data/report.json");
$phpdata = json_decode($existingdata);
$formdata = array(
"report"=>$_REQUEST["report"]
);
$phpdata[] = $formdata;

$jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);

if (file_put_contents("../data/report.json", $jsondata)) {
    echo "Report written successfully";
} else {
    echo "file written failed";
}
}
?>