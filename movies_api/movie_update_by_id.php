<?php
header('Content-Type: application/json');

use Model\mMovie;

// The movie was provided through GET request
if (isset($_POST['id']) && isset($_POST['title'])) {




  $id = $_POST['id'];
  $title = $_POST['title'];
  $storyline = $_POST['storyline'];
  $lang = $_POST['lang'];
  $genre = $_POST['genre'];
  $release_date = $_POST['release_date'];
  $box_office = $_POST['box_office'];
  $runtime = $_POST['runtime'];
  $stars = $_POST['stars'];

  $movie = array(
    ":id" => $id,
    ":title" => $title,
    ":storyline" => $storyline,
    ":lang" => $lang,
    ":genre" => $genre,
    ":release_date" => $release_date,
    ":box_office" => $box_office,
    ":runtime" => $runtime,
    ":stars" => $stars
  );



  include_once("init.php");

  $movies = new mMovie;

  $allMovies = $movies->movieUpdateById($id, $movie);

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
} else {

  // No movie title was provided, we cannot get the movie
  $response['error'] = true;
  $response['message'] = "Please provide a exact movie id and or title?";
}

// Display Results
echo (json_encode($response));