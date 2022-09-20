<?php
header('Content-Type: application/json');

use Model\mMovie;


// The movie was provided through GET request
if (isset($_GET['title'])) {
  $title = $_GET['title'];

  include_once("init.php");

  $movies = new mMovie;

  $allMovies = $movies->movieReadByTitle($title);

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
} else {

  // No movie title was provided, we cannot get the movie
  $response['error'] = true;
  $response['message'] = "Please provide a exact movie title?";
  $response['response_code'] = 400;
}


// Display Results
echo (json_encode($response));