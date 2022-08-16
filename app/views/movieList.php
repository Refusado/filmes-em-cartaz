<?php
require_once realpath(__DIR__ . '/../models/getCity.php');
require_once realpath(__DIR__ . '/../controllers/allMovies.php');
require_once 'selectCity.php';

function showMoviesList() {
  global $_moviesList;

  foreach ($_moviesList as $movie) {
    $name = $movie->getName();
    $imgUrl = $movie->getImage();
    $rating = $movie->getRating();
    $trailerUrl = $movie->getTrailer();
    $trailer = $trailerUrl ? "<a href='$trailerUrl' target='_blank'>Assita o trailer!</a>" : "Sem trailer disponível";
    
    echo "
    <h3/>$name</h3>
    <img src='$imgUrl' alt='$name' title='$name'/>
    <p>$trailer</p>
    <span title='Classificação indicativa'>Classificação indicativa: $rating</span>
    <hr>
    ";
  }
}

?>