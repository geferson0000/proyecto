<?php

class Model {
  public $db;
  function __construct(){
    // echo "<div class='result'>from Model parent connecting to database</div>";
    $this->db = new Database();
  }
}

?>