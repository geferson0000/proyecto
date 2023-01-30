<?php
session_start();
include_once('config.php');

if ($_SESSION["id"]) {
  include_once('./module/html.php');

  $content = function () {
    include_once('./module/indexHtml.php');
    include_once('./module/header.php');
    include_once('./module/carrousel.php');
  };
  template($content, 'Main page');
} else {
  comeBack("login.php")
}
?>