<?php
require_once realpath(__DIR__ . '/../controllers/allMovies.php');
require_once 'selectCity.php';

echo "<h1> Filmes em cartaz ($cityName) </h1>";
if (!count($moviesDetails)) {
  echo "Não há filmes em cartaz nesta cidade :\\";
}

function showMoviesList() {
  global $moviesList;
  foreach ($moviesList as $movie) {
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