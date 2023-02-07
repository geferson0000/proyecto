<?php
session_start();
$_SESSION["token"] = md5(uniqid(mt_rand(), true)); // crenado un token
include_once('./module/html.php');


$content = function(){ // empaquetando el contenido
  include_once('./module/loginHtml.php');
};
template($content, 'Login'); // utilizando el HTML para mostrar lo empaquetado
?>

