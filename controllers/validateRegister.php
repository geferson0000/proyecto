<?php
// Imports
include_once('link.php');
include_once('config.php');

// variables of the user
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];

$database = "sanAgustin";
$table = "user";

// variables
$insert = "insert into $table (username, password) values (:username, :password)";


$link = new Link($__host, $__userDB, $__passDB, $database);

try {
  $link -> db -> prepare($insert) -> execute([
    ':username' => $username,
    ':password' => $password
  ]);

  header('location:login.php');
  exit();

} catch (Throwable $error) {
  echo 'error: '. $error;
};


?>