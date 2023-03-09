<?php

class Alumno {
  public $cedula;
  public $firstName;
  public $SecondName;
  public $firstSurname;
  public $secondSurname;
  public $adress;
  public $phone;
  public $gender;
  public $birthdate;

}

class studentModel extends Model{
  public function __construct(){
    echo "<div class='result'>new Model loaded</div>";
    parent::__construct();
  }

  public function get(){
    $items = [];
    
    try{
      $text = "SELECT * FROM student";
      $query = $this->db->connect()->query($text)->fetchAll();
      
      foreach($query as $row){
        $item = new Alumno();
        $item->cedula = $row['cedula'];
        $item->firstName    = $row['firstName'];
        $item->SecondName = $row['secondName'];
        $item->firstSurname = $row['firstSurname'];
        $item->secondSurname = $row['secondSurname'];
        $item->adress = $row['adress'];
        $item->phone = $row['phone'];
        $item->gender = $row['gender'];
        $item->birthdate = $row['birthdate'];

        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
        return [];
    }
}

  public function insert($data){
    $text = 
    "insert into 
    student (cedula, firstName, secondName, firstSurname, secondSurname, adress, phone, gender, birthdate)
    values (:cedula, :firstName, :secondName, :firstSurname, :secondSurname,:adress, :phone, :gender, :birthdate)";
    
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
    echo "<div class='result'>data inserted</div>";
  }

  public function update(){
  }
  
  public function delete(){
  }
}

?>