<?php

//     define('USER', 'root');
//     define('PASS', 'Op.redo04');
//     define('HOST', 'localhost');

class Database {
  private $host;
  private $user;
  private $password;
  private $dbname;
  private $db;
  function __construct(){
    $this->host = constant('HOST');
    $this->user = constant('USER');
    $this->password = constant('PASSWORD');
    $this->dbname = constant('DATABASE');
  }

  function connect(){
    $dns = 'mysql: host=' . $this->host . ';dbname='. $this->dbname;
    $options = [
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false
    ];
    try {
      $pdo = new PDO($dns, $this->user, $this->password, $options);
      return $pdo;
    } catch (PDOException $error) {
      print '<p>'.$error->getMessage().'</p>';
      die();
    };
  }
}

?>