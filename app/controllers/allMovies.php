<?php
require_once realpath(__DIR__ . '/../models/getDocument.php');
require_once 'Movie.class.php';

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

$_moviesList = [];
for ($i = 1; $i <= count($moviesDetails); $i++) {
  $currentMovie = new Movie;
  $currentMovie->setName($moviesNames[$i - 1]);
  $currentMovie->setImage($moviesImagesUrls[$i - 1]);

  $trailerTag = $xPath->query('.//*[@data-title="' . $currentMovie->name . '"]')[0];
  if ($trailerTag) {
    $localEmbedUrl = $trailerTag->attributes[0]->value;
    $embedUrl = "https:$localEmbedUrl";
    $currentMovie->setTrailer(preg_replace('/(embed\/)/', 'watch?v=', $embedUrl));
  }
  $currentMovie->setRating($moviesRating[$i - 1]);

  array_push($_moviesList, $currentMovie);
}

$_moviesNo = count($_moviesList);
?>