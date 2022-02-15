<?php

require_once('lib/nusoap.php');

$bil1 = 10;
$bil2 = 25;

$client = new nusoap_client('http://localhost/soap_prak10/server.php');

$result = $client -> call('jumlahkan', array('x' => $bil1, 'y' => $bil2));
$result2 = $client -> call('modulo', array('x' => $bil1, 'y' => $bil2));

echo "<p>Hasil Penjumlahan ".$bil1." dan ".$bil2." adalah ".$result."</p>";
echo "<br>";

echo "<p>Hasil Modulus dari ".$bil1." dan ".$bil2." adalah ".$result2."</p>";
echo "<br>";

echo $client -> request;

?>