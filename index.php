<?php
require_once 'app/views/movieList.php';
require_once 'app/views/header.php';
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
  showHeader();
  showMoviesList();
  ?>
</body>

</html>