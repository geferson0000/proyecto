<?php
class User {
  public $username;
  public $password;
  public $id;
  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
  }
}
class signModel extends Model{
  public function __construct(){
    // echo "<div class='result'>new Model loaded</div>";
    parent::__construct();
  }

  public function login($username, $password){
    $text = "SELECT cedula, firstName FROM student WHERE cedula = $password and firstName = '$username'";
    $query = $this->db->connect()->query($text)->fetchAll();
    $user = new User($query[0][1], $query[0][0]);
    $user->id = $user->username == $username && $user->password == $password 
    ? session_id() 
    : null;
    return $user;
  }
}

?>