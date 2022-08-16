<?php
class Movie {
  var $name;
  var $imgUrl;
  var $trailerUrl;
  var $rating;


  function setName($n) {
    $this->name = $n;
  }
  function getName() {
    return $this->name;
  }

  function setImage($i) {
    $this->imgUrl = $i;
  }
  function getImage() {
    return $this->imgUrl;
  }

  function setTrailer($t) {
    $this->trailerUrl = $t;
  }
  function getTrailer() {
    if ($this->trailerUrl) {
      return $this->trailerUrl;
    }
    return false;
  }

  function setRating($r) {
    $this->rating = $r;
  }
  function getRating() {
    return $this->rating;
  }
}
