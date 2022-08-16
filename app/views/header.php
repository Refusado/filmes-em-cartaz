<?php
require_once realpath(__DIR__ . '/../models/getCity.php');
require_once realpath(__DIR__ . '/../controllers/allMovies.php');
require_once realpath(__DIR__ . '/../views/selectCity.php');

function showHeader() {
  global $_cityName;
  global $_moviesNo;

  echo "<h1> Filmes em cartaz - $_cityName</h1>";
  echo "<p><i>($_moviesNo filmes em cartaz)</i></p>";

  showCitySelector();
}
?>