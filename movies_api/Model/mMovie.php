<?php

namespace Model;

use Core\Model as Model;



class mMovie extends Model
{

  // C - CREATE


  // R - READ

  public function movieReadAll()
  {
    $query = "SELECT * FROM `movies`";
    return self::readAll($query);
  }

  public function movieReadById($id)
  {

    $query = "SELECT * FROM `movies` WHERE `id` = :id ";
    $args = array(
      ":id" => $id
    );
    return self::readById($query, $args);
  }

  public function movieReadByTitle($title)
  {
    $query = "SELECT * FROM `movies` WHERE `title` = :title ";
    $args = array(
      ":title" => $title
    );
    return self::readByTitle($query, $args);
  }

  // U - UPDATE
  public function movieUpdateById($args = array())
  {

    $query = "UPDATE `movies` SET `title` = :title , `storyline` = :storyline , `lang` = :lang , `genre` = :genre , `release_date` = :release_date , `box_office` = :box_office , `runtime` = :runtime , `stars` = :stars WHERE `id` = :id ";

    return self::updateById($query, $args);
  }




  // D - DELETE
  public function movieDeleteById($id)
  {

    $query = "DELETE FROM `movies` WHERE `id` = :id ";
    $args = array(
      ":id" => $id
    );
    return self::deleteById($query, $args);
  }
}