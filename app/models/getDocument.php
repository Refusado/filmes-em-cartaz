<?php
require_once 'getCity.php';
$BASE_URL = "https://www.cinemark.com.br/";
$_url = "$BASE_URL$city/filmes/em-cartaz";
@$content = file_get_contents($_url);

$document = new DOMDocument();
$content ? @$document->loadHTML($content) : connectionError();

$xPath = new DOMXPath($document);

function connectionError() {
  global $_url;
  echo "<p>Houve um error ao tentar acessar o conteúdo de <b>$_url</b>. Contate o desenvolvedor</p>";
};
?>