<?php
include_once('./module/html.php');

$content = function(){ // empaquetando el contenido
  include_once('./module/signupHtml.php');
};

template($content, 'Sign up'); // utilizando el HTML para mostrar lo empaquetado
?>