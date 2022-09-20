<?php


use Core\Validate;

include_once("init.php");


echo ("within folder app index.php <br>");

$validate = new Validate;
echo $validate->myClass();


/**
 * The structure of our movies project api
 * 
 * 1- Get a movie or all movies by id or name
 * 2- Insert or Create
 * 3- Update
 * 4- Delete
 */