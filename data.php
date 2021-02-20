<?php
if (!isset($myObj)) 
$myObj['data'][0] = new stdClass();
$myObj['data'][0] ->id = "1";
$myObj['data'][0] ->name = "Tiger Nixon";
$myObj['data'][0] ->position = "System Architect";
$myObj['data'][0] ->salary = "$320,800";
$myObj['data'][0] ->start_date = 30;
$myObj['data'][0] ->office = "Edinburgh";
$myObj['data'][0] ->extn = "5421";

$myObj['data'][1] = new stdClass();
$myObj['data'][1] ->id = "1";
$myObj['data'][1] ->name = "Tiger Nixon";
$myObj['data'][1] ->position = "System Architect";
$myObj['data'][1] ->salary = "$320,800";
$myObj['data'][1] ->start_date = 30;
$myObj['data'][1] ->office = "Edinburgh";
$myObj['data'][1] ->extn = "5421";

$myObj['data'][2] = new stdClass();
$myObj['data'][2] ->id = "1";
$myObj['data'][2] ->name = "Tiger Nixon";
$myObj['data'][2] ->position = "System Architect";
$myObj['data'][2] ->salary = "$320,800";
$myObj['data'][2] ->start_date = 30;
$myObj['data'][2] ->office = "Edinburgh";
$myObj['data'][2] ->extn = "5421";
$myJSON = json_encode($myObj);

echo $myJSON;
?>
