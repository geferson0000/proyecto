<?php

session_start();

// Imports
include_once('link.php');
include_once('config.php');

// variables of the user
if ($_POST["csrf"] == $_SESSION["token"]) { // valindado si la informacion que llega es del login
  $username = $_POST['username'];
  $password = $_POST['password'];
}
$database = "sanAgustin";
$table = "user";

// variables


$query = "SELECT username, password FROM $table;";
$link = new Link($__host, $__userDB, $__passDB, $database); // haciendo una nueva conexion con la base de datos
$result = $link -> db -> query($query) -> fetchAll(); // haciendo una consulta a la base de datos

foreach ($result as $row) {
  if ($row['username'] == $username && $row['password'] == $password){ // validando la informacion ingresada del fomulario
    $_SESSION["id"] = session_id(); // creando el ID de sesion
    $_SESSION["username"] = $username;
    comeBack("index.php"); // link al index
  };
};
comeBack("login.php"); // link al login

?>