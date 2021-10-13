<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php
require_once 'Response.php';
require_once 'xmlprocessing.php';
header('Content-Type: text/html; charset=utf-8');

//zadajte ico
$ico='45626499';


$resp=xmlprocessing($ico);
echo $resp->getName();
echo '<br>';
echo $resp->getDateOfBirth();
echo '<br>';
echo $resp->getCity();
echo '<br>';
echo $resp->getCountry();
echo '<br>';
echo $resp->getPsc();
echo '<br>';
echo $resp->getCompany();
echo '<br>';


