<?php

class newerModel extends Model{
  public function __construct(){
    echo "<div class='result'>new Model loaded</div>";
    parent::__construct();

  }

  public function query(){
  }
  public function insert($data){
    // echo "<div class='result'>data inserted</div>";
    $text = "insert into 
    student (
      cedula, 
      firstName, 
      middleName, 
      firstSurname, 
      secondSurname,
      adress, 
      phone, 
      gender, 
      birthdate
    )
    values (
      :cedula, 
      :firstName, 
      :middleName, 
      :firstSurname, 
      :secondSurname,
      :adress, 
      :phone, 
      :gender, 
      :birthdate
    )";

    $query = $this->db->connect()->prepare("$text");
    $query->execute([
      ':cedula' => $data['cedula'], 
      ':firstName'  => $data['firstName'], 
      ':middleName' => $data['middleName'], 
      ':firstSurname' => $data['firstSurname'], 
      ':secondSurname' => $data['secondSurname'],
      ':adress' => $data['adress'], 
      ':phone' => $data['phone'], 
      ':gender' => $data['gender'], 
      ':birthdate' => $data['birhtdate']
    ]);
  }

  public function update(){
  }
  
  public function delete(){
  }
}

?>