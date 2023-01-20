<?php
// session_start();
// include_once('config.php');

// if ($_SESSION["id"]) {
//   include_once('./module/html.php');

//   $content = function () {
//     include_once('./module/indexHtml.php');
//     include_once('./module/header.php');
//     include_once('./module/carrousel.php');
//   };
//   template($content, 'Main page');
// } else {
//   comeBack("login.php");
// }

require_once './libs/database.php';
require_once './libs/model.php';
require_once './libs/controller.php';
require_once './libs/view.php';
require_once './libs/app.php';

require_once 'config.php';

$app = new App();

?>