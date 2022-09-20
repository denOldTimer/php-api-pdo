<?php

$sql = "CREATE TABLE movies(\n"

  . "  id int NOT NULL AUTO_INCREMENT,\n"

  . "  title varchar(255) NOT NULL,\n"

  . "  storyline text,\n"

  . "  lang varchar(100),\n"

  . "  genre varchar(255),\n"

  . "  release_date varchar(100),\n"

  . "  box_office float,\n"

  . "  runtime varchar(100),\n"

  . "  stars float(4,2),\n"

  . "  PRIMARY KEY (id)\n"

  . ");";