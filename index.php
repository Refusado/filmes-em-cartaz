<?php
require_once('select-city.php');
require_once('movie-list.php');
require_once('getCity.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes em cartaz</title>
</head>

<body>
<?php
echo $selectCity;
echo "<h1> Filmes em cartaz ($cityName) </h1>";
echo "<pre>";
print_r($moviesList);
echo "</pre>";

foreach ($moviesList as $movie) {
    $movie->showName();
    $movie->showImage();
    $movie->showTrailer();
    $movie->showRating();

    echo "<hr>";
}
?>
</body>

</html>