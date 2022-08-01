<?php
@$city = $_GET['city'] ? $_GET['city'] : 'sao_paulo';

$BASE_URL = "https://www.cinemark.com.br/";
$finalUrl = "$BASE_URL$city/filmes/em-cartaz";
$content = file_get_contents($finalUrl);

$document = new DOMDocument();
@$document->loadHTML($content);

$xPath = new DOMXPath($document);


require_once('./Movie.php');
$moviesDetails = $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," movie-details ")]');

$moviesImgTag = $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," movie-image ")]//picture//img');
$moviesNames = [];
foreach ($moviesImgTag as $item) {
    array_push($moviesNames, $item->attributes[2]->value);
}

$moviesSourceTag = $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," movie-image ")]//picture/source');
$moviesImagesUrls = [];
foreach ($moviesSourceTag as $item) {
    array_push($moviesImagesUrls, $item->attributes[1]->value);
}

$moviesRatingTag =  $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," rating-abbr ")]');
$moviesRating = [];
foreach ($moviesRatingTag as $item) {
    array_push($moviesRating, $item->textContent);
}

$allMovies = [];
for ($i = 1; $i <= count($moviesDetails); $i++) {

    $currentMovie = new Movie;
    $currentMovie->name = $moviesNames[$i - 1];
    $currentMovie->imgUrl = $moviesImagesUrls[$i - 1];

    $trailerTag = $xPath->query('.//*[@data-title="' . $currentMovie->name . '"]')[0];
    if ($trailerTag) {
        $currentMovie->trailerUrl = $trailerTag->attributes[0]->value;
    }
    $currentMovie->rating = $moviesRating[$i - 1];

    array_push($allMovies, $currentMovie);
}



echo "<h3> Filmes em cartaz (" . ucwords(preg_replace('/(_)/', ' ', $city)) . ") </h3>";

foreach ($allMovies as $m) {
    echo $m->name . "<br>";
}
