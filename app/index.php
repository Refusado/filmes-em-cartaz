<?php
require_once 'views/selectCity.php';
require_once 'views/movieList.php';
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
  showCitySelector();
  showMoviesList();
  ?>
</body>

</html>