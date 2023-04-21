<?php
require_once './controllers/controllerErr.php';
class App 
{
  function __construct()
  {
    session_start();
    // if there is a url after http://localhost/proyecto/ and there is a user created or the url is same to "sing/login"
    if (isset($_GET['url']) && isset($_SESSION['user']) || $_GET['url'] == 'sign/login')
    { 
      // getting url
      $url = $_GET['url'];
    } 
    
    else 
    {
      // url void
      $user = json_decode(json_encode($_SESSION['user']));
      $url = $user->id == session_id() ? 'main' : 'sign';
    }

    // formatting url
    $url = rtrim($url, '/'); # deleting spaces 
    $url = explode('/', $url); # get a string that divide it by "/" returning array

    // url shape is /controllerName/method/ => url[0]=controllerName / url[1]=method
    
    // folder/controllerName.php
    $fileControllers = './controllers/' . $url[0] . '.php';

    try 
    {
      require_once $fileControllers;

      // new controllerName()
      $controller = new $url[0];
      
      // loadModel(with name "controllerName")
      $controller->loadModel($url[0]);
    
      // method exist?
      isset($url[1]) ? print_r($controller->{$url[1]}()) : $controller->render();
    } 

    catch (\Throwable $error) 
    {
      header("HTTP/ 500 ok");
      $controller = new ControllerErr($error);
      $controller->render();
    }

  }
}

?>