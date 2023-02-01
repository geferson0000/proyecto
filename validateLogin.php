<?php

// session_start();

// // Imports
// include_once('link.php');
// include_once('config.php');

// // variables of the user
// if ($_POST["csrf"] == $_SESSION["token"]) {
//   $username = $_POST['username'];
//   $password = $_POST['password'];
// }
// $database = "sanAgustin";
// $table = "user";

// // variables


// $query = "SELECT username, password FROM $table;";
// $link = new Link($__host, $__userDB, $__passDB, $database);
// $result = $link -> db -> query($query) -> fetchAll();

// foreach ($result as $row) {
//   if ($row['username'] == $username && $row['password'] == $password){
//     $_SESSION["id"] = session_id();
//     $_SESSION["username"] = $username;
//     comeBack("index.php");
//   };
// };
// comeBack("login.php");

?>