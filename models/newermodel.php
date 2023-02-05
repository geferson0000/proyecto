<?php

class newerModel extends Model{
  public function __construct(){
    echo "<div class='result'>new Model loaded</div>";
    parent::__construct();

  }

  public function query(){
    // query data on database
  }
  public function insert(){
    // insert data on database
    echo "<div class='result'>data inserted</div>";
  }
  public function update(){
    // update data on database
  }
  public function delete(){
    // delete data on database
  }
}

?>