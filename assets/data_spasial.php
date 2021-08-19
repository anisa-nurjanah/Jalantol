<?php
$url = file_get_contents("http://localhost:8082/geoserver/rams/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=rams%3AADMINISTRATIF_4236&maxFeatures=50&outputFormat=application%2Fjson");
echo $url;
?>
