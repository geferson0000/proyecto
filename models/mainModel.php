<?php

class Alumno 
{
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

class mainModel extends Model
{
  private $table = "student";
  private $tableId = "cedula";
  public function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    $items = [];

    $text = "SELECT * FROM student";
    $query = $this->db->getConnection()->query($text)->fetchAll();
    
    foreach($query as $row)
    {
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
  }

  public function insert($data)
  {
    $datas = [
      ':cedula'        => $data['cedula'],
      ':firstName'     => $data['firstName'],
      ':secondName'    => $data['secondName'],
      ':firstSurname'  => $data['firstSurname'],
      ':secondSurname' => $data['secondSurname'],
      ':adress'        => $data['adress'],
      ':phone'         => $data['phone'],
      ':gender'        => $data['gender'],
      ':birthdate'     => $data['birthdate']
    ];
    $sql = 
    "insert into 
    student (cedula, firstName, secondName, firstSurname, secondSurname, adress, phone, gender, birthdate)
    values (:cedula, :firstName, :secondName, :firstSurname, :secondSurname,:adress, :phone, :gender, :birthdate)";
    
    $query = $this->db->getConnection()->prepare($sql);
    return ["status" => $query->execute($datas)];
  }

  public function update($row, $column, $value)
  {
    $data = 
    [
      ":$column"        => $value, 
      ":$this->tableId" => $row
    ];
    $sql = 
    "UPDATE $this->table
    SET $column=:$column
    WHERE $this->tableId=:$this->tableId";

    $action = $this->db->getConnection()->prepare($sql);
    return ["status" => $action->execute($data)]; 
  }
  
  public function delete($row)
  {
    $data = [
      ":$this->tableId" => $row,
    ];
    $sql = "DELETE FROM $this->table 
    WHERE $this->tableId=:$this->tableId";

    $action = $this->db->getConnection()->prepare($sql);
    return ["status" => $action->execute($data)]; 
  }
}
