<?php

class Model {

  public $db;
  function __construct(){
    echo "<div class='result'>from Model parent and connecting to database</div>";
    $this->db = new Database();
  }
}

?>