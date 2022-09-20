<?php

namespace Core;

use Core\Database;
use PDO;
use Exception;

/**
 * Base Model
 */
class Model extends Database
{
  protected static $db = null;

  /** The database Connection
   * 
   * 
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * THE CRUD SYSTEM
   * - Create
   * - Read
   * - Update
   * - Delete
   */





  /** The ReadAll Method
   * 
   * @param string $query A SQL string statement
   * @return ASSOC MIXED ARRAY
   */
  public function readAll($query)
  {
    $dB = self::getdb();
    if ($query) {
      $stmt = $dB->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      echo ('ERROR: readAll - empty query');
    }
  }

  /** The ReadById Method
   * 
   * @param string $query A SQL string statement
   * @param array $args Parameters to bind
   * @return ASSOC MIXED ARRAY
   */
  public function readById($query, $args)
  {
    $dB = self::getdb();

    if ($query && $args) {
      $stmt = $dB->prepare($query);
      foreach ($args as $key => $value) {
        $stmt->bindValue("$key", $value);
      }
      $stmt->execute();

      return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      echo ('ERROR: readById - empty query and nor id');
    }
  }


  /** The ReadById Method
   * 
   * @param string $query A SQL string statement
   * @param array $args Parameters to bind
   * @return ASSOC MIXED ARRAY
   */
  public function readByTitle($query, $args)
  {
    $dB = self::getdb();

    if ($query && $args) {
      $stmt = $dB->prepare($query);
      foreach ($args as $key => $value) {
        $stmt->bindValue("$key", $value);
      }
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      echo ('ERROR: readByTitle - empty query and nor title');
    }
  }
} //END-CLASS