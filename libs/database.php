<?php

class Database 
{
  private $host;
  private $user;
  private $password;
  private $dbname;
  private $connection;
  private static $instance;
  private function __construct()
  {
    $this->host = constant('HOST');
    $this->user = constant('USER');
    $this->password = constant('PASS');
    $this->dbname = constant('DATABASE');
    $this->connection = $this->connect();
  }

  private function connect():object
  {
    $dns = 'mysql: host=' . $this->host . ';dbname='. $this->dbname;
    $options = [
      PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false
    ];

    try 
    {
      $pdo = new PDO($dns, $this->user, $this->password, $options);
      return $pdo;
    } 
    
    catch (PDOException $error) 
    {
      throw $error;
    }

  }

  public static function getInstance():object
  {
    if (self::$instance === null) 
    {
      self::$instance = new Database;
    }
    return self::$instance;
  }

  public function getConnection():object
  {
    return $this->connection;
  }
}

?>