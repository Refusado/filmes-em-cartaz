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
    "<a class='bg-green-700 border border-gray-100 text-gray-100 opacity-90 cursor-pointer inline rounded py-2 px-3
    duration-100 hover:opacity-100' href='$trailerUrl' target='_blank'>TRAILER</a>" :
    "<p class='bg-gray-600  border border-gray-200 text-gray-100 opacity-70 cursor-default inline rounded py-2 px-3' title='Sem trailer disponível'>TRAILER</p>";
    
    echo "
    <div class='border-green-400 w-11/12 max-w- h-56 md:w-48 flex'>
      <img class='h-full inline-block' src='$imgUrl' alt='$name' title='$name'/>
      <div class='bg-blue-800 w-full py-3 flex flex-col justify-between'>
        <h3 class='bg-blue-400 text-lg leading-5'>$name</h3>
        <div class='h-fit flex justify-between items-center flex-wrap gap-3 select-none px-3 pt-3 border-t border-dashed border-gray-400 text-xs font-bold'>
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
              echo "bg-gray-800";
              break;
          } 
          echo " text-sm text-slate-50 flex justify-center items-center h-8 w-8 rounded'
            title='Classificação indicativa de $rating anos'>
            $rating
          </span>
          <span class='h-fit py-1 shadow-md'>$trailer</span>
        </div>
      </div>
    </div>
    ";
  }
}

// flex-col justify-end
?>