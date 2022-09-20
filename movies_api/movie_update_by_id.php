<?php
header('Content-Type: application/json');

use Model\mMovie;

// The movie was provided through GET request
if (isset($_POST['id']) && isset($_POST['title'])) {


  $movie = array();
  $movie["id"] = $_POST['id'];
  $movie["title"] = $_POST['title'];
  $movie["storyline"] = $_POST['storyline'];
  $movie["lang"] = $_POST['lang'];
  $movie["genre"] = $_POST['genre'];
  $movie["release_date"] = $_POST['release_date'];
  $movie["box_office"] = $_POST['box_office'];
  $movie["runtime"] = $_POST['runtime'];
  $movie["stars"] =  $_POST['stars'];

  include_once("init.php");

  $movies = new mMovie;

  $allMovies = $movies->movieUpdateById($_POST['id'], $movie);

  //var_dump($allMovies);

  $response = array();
  if ($allMovies == "true") {
    //Successfully  
    $response['error'] = false;
    $response['message'] = "The Movie has been updated successfully";
    $response['response_code'] = 200;
  } else {
    // There was an error
    $response['error'] = true;
    $response['message'] = "Failed to update movie";
    $response['response_code'] = 400;
  }
} else {

  // No movie title was provided, we cannot get the movie
  $response['error'] = true;
  $response['message'] = "Please provide a exact movie id and or title?";
  $response['response_code'] = 400;
}

// Display Results
echo (json_encode($response));