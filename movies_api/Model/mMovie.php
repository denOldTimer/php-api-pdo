<?php

namespace Model;

use Core\Model as Model;



class mMovie extends Model
{

  // C - CREATE
  public function movieCreateByTitle($params)
  {
    $query = "INSERT INTO `movies` (`id`, `title`, `storyline`, `lang`, `genre`, `release_date`, `box_office`, `runtime`, `stars`) VALUES (NULL, :title, :storyline, :lang, :genre, :release_date, :box_office, :runtime, :stars)";

    return self::createByTitle($query, $params);
  }

  // R - READ

  public function movieReadAll()
  {
    $query = "SELECT * FROM `movies`";
    return self::readAll($query);
  }

  public function movieReadById($id)
  {

    $query = "SELECT * FROM `movies` WHERE `id` = :id ";
    $params = array(
      "id" => $id
    );
    return self::readById($query, $params);
  }

  public function movieReadByTitle($title)
  {
    $query = "SELECT * FROM `movies` WHERE `title` = :title ";
    $params = array(
      "title" => $title
    );
    return self::readByTitle($query, $params);
  }

  // U - UPDATE
  public function movieUpdateById($id, $params)
  {
    // TODO CReate a ID check
    $id ? true : false;

    $query = "UPDATE `movies` SET `title`=:title, `storyline`=:storyline, `lang`=:lang, `genre`=:genre, `release_date`=:release_date, `box_office`=:box_office, `runtime`=:runtime, `stars`=:stars WHERE `id`= :id";

    return self::updateById($query, $params);
  }




  // D - DELETE
  public function movieDeleteById($id)
  {
    // TODO CReate a ID check
    $id ? true : false;

    $query = "DELETE FROM `movies` WHERE `id`=:id LIMIT 1 ";
    $params = array(
      "id" => $id
    );
    return self::deleteById($query, $params);
  }
}