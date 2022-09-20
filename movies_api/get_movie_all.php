<?php
header('Content-Type: application/json');

use Model\mMovie;

include_once("init.php");

$movies = new mMovie;

$allMovies = $movies->getMovieAll();

//var_dump($allMovies);

$response = array();
if ($allMovies) {
  //Successfully  
  $response['error'] = false;
  $response['movies'] = $allMovies;
  $response['message'] = "movies returned successfully";
} else {
  // There was an error
  $response['error'] = true;
  $response['message'] = "Could not execute query";
}


// Display Results
echo (json_encode($response));