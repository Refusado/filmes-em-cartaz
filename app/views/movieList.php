<?php
require_once realpath(__DIR__ . '/../models/getCity.php');
require_once realpath(__DIR__ . '/../controllers/allMovies.php');
require_once 'selectCity.php';

function showMoviesList() {
  global $_moviesList;

  foreach ($_moviesList as $movie) {
    $name = $movie->getName();
    $anchor = $movie->getAnchor();
    $imgUrl = $movie->getImage();
    $rating = $movie->getRating();
    switch ($rating) {
      case "L":
        $ratingBg = "bg-[#009017]";
        $ratingTitle = "Livre para todos os públicos.";
        break;
      case "10":
        $ratingBg = "bg-[#0181DA]";
        $ratingTitle = "Não recomendado para menores de 10 anos";
        break;
      case "12":
        $ratingBg = "bg-[#FACD12]";
        $ratingTitle = "Não recomendado para menores de 12 anos";
        break;
      case "14":
        $ratingBg = "bg-[#F08A0E]";
        $ratingTitle = "Não recomendado para menores de 14 anos";
        break;
      case "16":
        $ratingBg = "bg-[#CF0008]";
        $ratingTitle = "Não recomendado para menores de 16 anos";
        break;
      case "18":
        $ratingBg = "bg-[#000000]";
        $ratingTitle = "Não recomendado para menores de 18 anos";
        break;
    } 
    $trailerUrl = $movie->getTrailer();
    $trailer = $trailerUrl ?
    "<a class='bg-zinc-200 text-zinc-700 select-none cursor-pointer border border-zinc-300 inline rounded-sm py-2 px-3 lg:shadow-md hover:shadow-zinc-400 opacity-90
    duration-200' href='$trailerUrl' target='_blank'>TRAILER</a>" :
    
    "<p class='bg-zinc-800                 select-none cursor-default border border-zinc-300 inline rounded-sm py-2 px-3 opacity-30'
    title='Sem trailer disponível'>TRAILER</p>";
    
    
    echo "
    <div class='w-10/12 md:w-7/12 lg:w-96 h-52 flex border-t-2 border-red-600 lg:border-red-800 lg:hover:border-red-600 duration-500 group bg-gradient-to-r from-zinc-800'>
      <img class='h-full inline-block bg-black' src='$imgUrl' alt='$name' title='$name'/>
      <div class='p-5 pr-0 flex flex-col justify-start'>
        <div class='max-w-full max-h-18 pb-3 md:pb-5'>
          <h3 class='text-lg text-zinc-300 opacity-80 tracking-wide leading-5 '>$name</h3>
        </div>
        <div class='py-2 mb-3 text-xs font-bold text-zinc-300'>$trailer</div>

        <div class='mt-auto flex justify-start items-center flex-nowrap'>
          <span class='$ratingBg select-none text-sm font-bold text-white flex justify-center items-center h-7 w-7 p-0.5 min-w-fit rounded border border-zinc-500
          lg:opacity-0 lg:-translate-x-6 lg:group-hover:opacity-100 lg:group-hover:-translate-x-0 duration-500'
            title='$ratingTitle'>
            $rating
          </span>
          <a href='$anchor' class='p-2 text-sm md:text-base underline uppercase ml-6 text-red-500 opacity-70 tracking-widest cursor-pointer
          lg:opacity-0 lg:-translate-x-6 lg:group-hover:opacity-90 lg:group-hover:-translate-x-0 duration-500 delay-100'>Saiba mais</a>
        </div>
      </div>
    </div>
    ";
  }
}

// flex-col justify-end
?>