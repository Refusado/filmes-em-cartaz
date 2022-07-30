<?php
include_once('./select-city.html');
@$city = $_GET['city'] ? $_GET['city'] : 'sao_paulo';

$BASE_URL = "https://www.cinemark.com.br/";
$finalUrl = "$BASE_URL$city/filmes/em-cartaz";
$content = file_get_contents($finalUrl);

$document = new DOMDocument();
@$document->loadHTML($content);

$xPath = new DOMXPath($document);
$elements = $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," movie-title ")]/a');

echo "<h3> Filmes em cartaz (" . ucwords(preg_replace('/(_)/', ' ', $city)) . ") </h3>";
foreach ($elements as $movieNode) {
    echo $movieNode->textContent . "<br>";
}