<?php

require_once './libs/database.php';

abstract class Model 
{
  protected $db;
  function __construct()
  {
    $this->db = Database::getInstance();
  }
}

?>