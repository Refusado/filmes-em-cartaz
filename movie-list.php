<?php
require_once('getDocument.php');

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

$moviesRatingTag = $xPath->query('.//*[contains(concat(" ",normalize-space(@class)," ")," rating-abbr ")]');
$moviesRating = [];
foreach ($moviesRatingTag as $item) {
    array_push($moviesRating, $item->textContent);
}

$moviesList = [];
for ($i = 1; $i <= count($moviesDetails); $i++) {
    $currentMovie = new Movie;
    $currentMovie->name = $moviesNames[$i - 1];
    $currentMovie->imgUrl = $moviesImagesUrls[$i - 1];

    $trailerTag = $xPath->query('.//*[@data-title="' . $currentMovie->name . '"]')[0];
    if ($trailerTag) {
        $localEmbedUrl = $trailerTag->attributes[0]->value;
        $embedUrl = "https:$localEmbedUrl";
        $currentMovie->trailerUrl = preg_replace('/(embed\/)/', 'watch?v=', $embedUrl);
    }
    $currentMovie->rating = $moviesRating[$i - 1];

    array_push($moviesList, $currentMovie);
}
?>