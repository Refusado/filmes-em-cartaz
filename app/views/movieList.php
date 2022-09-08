<?php
require_once realpath(__DIR__ . '/../models/getCity.php');
require_once realpath(__DIR__ . '/../controllers/allMovies.php');
require_once 'selectCity.php';

function showMoviesList() {
  global $_moviesList;

  foreach ($_moviesList as $movie) {
    $name = $movie->getName();
    $imgUrl = $movie->getImage();
    $rating = $movie->getRating();
    $trailerUrl = $movie->getTrailer();
    $trailer = $trailerUrl ?
    "<a class='bg-red-900 border border-neutral-200 text-neutral-100 opacity-70 cursor-pointer inline rounded-sm py-2 px-3 shadow-lg
    duration-200 hover:opacity-90' href='$trailerUrl' target='_blank'>TRAILER</a>" :
    "<p class='bg-neutral-800  border border-neutral-200 text-neutral-100 opacity-70 cursor-default inline rounded-sm py-2 px-3 shadow-lg' title='Sem trailer disponível'>TRAILER</p>";
    
    echo "
    <div class='w-10/12 md:w-fit h-52 flex overflow-hidden border-y-2 border-red-800 hover:border-red-600 duration-300'>
      <img class='h-full inline-block bg-black' src='$imgUrl' alt='$name' title='$name'/>
      <div class='w-full py-3 flex flex-col justify-between bg-gradient-to-b from-neutral-900 via-stone-900 to-neutral-900'>
        <h3 class='md:w-56 px-4 py-1 text-lg text-neutral-100 tracking-wide leading-5'>$name</h3>

        <div class='h-fit flex justify-between items-center flex-wrap gap-3 select-none px-3 pt-3 border-t border-dashed border-neutral-400 text-xs font-bold'>
          <span class='";
          switch ($rating) {
            case "L":
              echo "bg-green-600";
              break;
            case "10":
              echo "bg-blue-500";
              break;
            case "12":
              echo "bg-yellow-500";
              break;
            case "14":
              echo "bg-orange-400";
              break;
            case "16":
              echo "bg-red-600";
              break;
            case "18":
              echo "bg-neutral-800";
              break;
          } 
          echo " text-sm text-neutral-50 flex justify-center items-center h-8 w-8 rounded opacity-90 border border-neutral-500'
            title='Classificação indicativa de $rating anos'>
            $rating
          </span>
          <span class='h-fit py-1'>$trailer</span>
        </div>
      </div>
    </div>
    ";
  }
}

// flex-col justify-end
?>