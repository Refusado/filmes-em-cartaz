<?php
require_once('getCity.php');
$BASE_URL = "https://www.cinemark.com.br/";
$finalUrl = "$BASE_URL$city/filmes/em-cartaz";
$content = file_get_contents($finalUrl);

$document = new DOMDocument();
@$document->loadHTML($content);

$xPath = new DOMXPath($document);
?>