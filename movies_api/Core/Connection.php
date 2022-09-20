<?php

namespace Core;

use Core\Database as Database;



class Connection
{
  protected $dB;

  public function __construct()
  {
    $this->dB = Database::getdB();
  }
}