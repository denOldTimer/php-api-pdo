<?php

namespace Model;

use Core\Model as Model;



class mMovie extends Model
{

  public function getMovieAll()
  {
    $query = "SELECT * FROM `movies`";
    return self::readAll($query);
  }

  public function getMovieById($id)
  {

    $query = "SELECT * FROM `movies` WHERE `id` = :id ";
    $args = array(
      ":id" => $id
    );
    return self::readById($query, $args);
  }

  public function getMovieByTitle($title)
  {
    $query = "SELECT * FROM `movies` WHERE `title` = :title ";
    $args = array(
      ":title" => $title
    );
    return self::readByTitle($query, $args);
  }
}