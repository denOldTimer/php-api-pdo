<?php
header('Content-Type: application/json');

use Model\mMovie;

include_once("init.php");

$movies = new mMovie;

$allMovies = $movies->movieReadAll();

//var_dump($allMovies);

$response = array();
if ($allMovies) {
  //Successfully  
  $response['error'] = false;
  $response['movies'] = $allMovies;
  $response['message'] = "movies returned successfully";
  $response['response_code'] = 200;
} else {
  // There was an error
  $response['error'] = true;
  $response['message'] = "Could not execute query";
  $response['response_code'] = 400;
}


// Display Results
echo (json_encode($response));