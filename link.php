<?php

class Link {
  public $db;
  public function __construct($__host, $__userDB, $__passDB, $database){
    $dns = "mysql: host=$__host; dbname=$database"; // variable con los datos para el acceso a la base de datos
    try {
      $this -> db = new PDO($dns, $__userDB, $__passDB); // haciendo la nueva conexion a la base de datos
    } catch (PDOException $error) {
      print '<p>'.$error->getMessage().'</p>';
      die();
    };
  }
}

?>

