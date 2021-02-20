<?php 
$requestPayload = file_get_contents("php://input");

$objec = json_decode($requestPayload);

var_dump($objec);

?>