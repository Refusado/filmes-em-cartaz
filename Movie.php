<?php
class Movie {
    var $name;
    var $imgUrl;
    var $trailerUrl;
    var $rating;

    function showName() {
        echo "<h3/> {$this->name} </h3>";
    }
    function showImage() {
        echo "<img src='{$this->imgUrl}' alt='{$this->name}' title='{$this->name}'/>";
    }
    function showTrailer() {
        if ($this->trailerUrl) {
            echo "<p><a href='{$this->trailerUrl}' target='_blank'> Assita o trailer!</a></p>";
        }
        else {
            echo "<p>Sem trailer disponível</p>";
        }
    }
    function showRating() {
        echo "<span title='Classificação indicativa'>Classificação indicativa: {$this->rating}</span>";
    }
}
?>