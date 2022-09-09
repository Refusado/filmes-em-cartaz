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

<body class="bg-zinc-900 text-zinc-300">

  <?php showHeader(); ?>
  <div class="container mx-auto flex flex-wrap justify-center gap-y-8 gap-x-5 py-2">
    <?php showMoviesList(); ?>
  </div>
  <div id="popup-container" class="bg-[#000000cb] h-full min-h-full w-full min-w-full justify-center items-center flex-wrap fixed top-0 left-0 hidden">

  </div>

  <script src="./public/js/main.js"></script>
</body>

</html>