<?php
require_once './controllers/controllerErr.php';
class App {
  function __construct(){
    $url = isset($_GET['url']) ? $_GET['url'] : 'main';

    // formatting url
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    // var_dump($url);

    $fileControllers = './controllers/' . $url[0] . '.php';
    if (file_exists($fileControllers)) {
      require_once $fileControllers;
      $controller = new $url[0];
      if (isset($url[1])) {
        $controller->{$url[1]}();
      }
    } else {
      $controller = new ControllerErr();
    }
  }
}

?>