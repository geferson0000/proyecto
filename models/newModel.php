<?php

class NewModel extends Model{
  public function __construct(){
    parent::__construct();

  }

  public function query(){
    // query data on database
  }
  public function insert(){
    // insert data on database
    echo "insertar datos";
  }
  public function update(){
    // update data on database
  }
  public function delete(){
    // delete data on database
  }
}

?>