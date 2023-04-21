<?php

require_once './libs/model.php';
require_once './libs/controller.php';
require_once './libs/app.php';

define('HOST', 'localhost');
define('USER', 'geferson');
define('PASS', '6048');
define('DATABASE', 'SanAgustinPrueba');

session_start();

if ($_SESSION['URL']) 
{
  $url = $_SESSION['URL'];
} 

else 
{
  $url = $_SERVER['REQUEST_URI'];
  $url = explode('/', $url);
  $url = "http://localhost/".$url[1]."/";
  $_SESSION['URL'] = $url;
}

define('URL', $url);

?>
