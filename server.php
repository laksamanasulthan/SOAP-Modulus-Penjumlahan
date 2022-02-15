<?php

require_once('lib/nusoap.php');

$server = new soap_server;

$server -> register('jumlahkan');
$server -> register('modulo');

function jumlahkan($x, $y){
    return $x + $y;
}

function modulo($x, $y){
    return $x % $y;
}


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

$server->service(file_get_contents("php://input"));
?>