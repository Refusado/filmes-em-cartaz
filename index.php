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
  <link rel="stylesheet" href="./public/css/styles.css">
</head>

<body class="bg-gradient-to-r from-red-800 via-red-900 to-red-800 text-red-50">
  <?php showHeader(); ?>
  <div class="container mx-auto flex flex-wrap justify-center gap-6 py-2">
    <?php showMoviesList(); ?>
  </div>
</body>

</html>