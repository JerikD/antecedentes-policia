<?php

$latitud = $_POST['latitude'];
$longitud = $_POST['longitude'];
error_log("Latitud: $latitud" . "\r\n" . "Longitud: $longitud" . "\r\n", 3, "location.log");
exit();

?>