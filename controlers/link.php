<?php

class Link {
  public function __construct($__host, $__userDB, $__passDB, $database){
    $dns = "mysql: host=$__host; dbname=$database";
    try {
      $this -> db = new PDO($dns, $__userDB, $__passDB);
    } catch (PDOException $error) {
      print '<p>'.$error->getMessage().'</p>';
      die();
    };
  }
}

?>

