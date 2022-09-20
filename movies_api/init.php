<?php

use Core\Connection;


include_once("config.php");

// autoloading classes
spl_autoload_register(function ($class) {
  // Replacing Backward slashes with forward slashes
  $class = str_replace("\\", "/", $class);
  //echo $class;
  require ucfirst($class) . '.php';
});


/**
 * TODO Figure out where PDO connection testing realy goes
 * TODO Create an ErrorHandler
 */

$con = new Connection;
// Testing Connection
// To test the connection just change database variables and look for the error code
// if (!$con) {
//   echo ("Connection failed");
//   die();
// }