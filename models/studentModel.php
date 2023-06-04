<?php


class studentModel extends Model
{
  private $table = "student";
  private $tableId = "cedula";
  public function __construct()
  {
    parent::__construct();
  }
  
  public function get()
  {
    require_once "studentTemplate.php";
    
    $items = [];
    
    $text = "SELECT * FROM student";
    $query = $this->db->getConnection()->query($text)->fetchAll();
    
    foreach($query as $row)
    {
      $item = new StudentTemplate();
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
  
  public function delete(int $id)
  {
    $data = [
      ":$this->tableId" => $id,
    ];
    $sql = "DELETE FROM $this->table 
    WHERE $this->tableId=:$this->tableId";

    $action = $this->db->getConnection()->prepare($sql);
    return ["status" => $action->execute($data)]; 
  }
}
