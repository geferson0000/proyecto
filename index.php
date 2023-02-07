<?php
session_start();
include_once('config.php');

if ($_SESSION["id"]) { // validando si esta creado el ID de sesion
  include_once('./module/html.php');

  $content = function(){ // empaquetando el contenido
    include_once('./module/indexHtml.php');
    include_once('./module/header.php');
    include_once('./module/carrousel.php');
  };
  template($content, 'Main page'); // utilizando el HTML para mostrar lo empaquetado
} else {
  comeBack("login.php"); // link al login
}
?>