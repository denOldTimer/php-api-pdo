<?php
header('Content-Type: application/json');

use Model\mMovie;

// The movie was provided through POST request
if (isset($_POST['id'])) {


  include_once("init.php");

  $movies = new mMovie;

  $allMovies = $movies->movieDeleteById($_POST['id']);

  $response = array();
  if ($allMovies == "true") {
    //Successfully  
    $response['error'] = false;
    $response['message'] = "The Movie was deleted successfully";
  } else {
    // There was an error
    $response['error'] = true;
    $response['message'] = "Failed to delete movie";
  }
} else {

  // No movie title was provided, we cannot get the movie
  $response['error'] = true;
  $response['message'] = "Please provide a valid movie id?";
}

// Display Results
echo (json_encode($response));