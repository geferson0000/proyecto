<?php
require_once './controllers/controllerErr.php';
class App 
{
  function __construct()
  {
    session_start();
    if (isset($_GET['url']) && isset($_SESSION['user']) || $_GET['url'] == 'sign/login')
    { 
      // void url
      $url = $_GET['url'];
    } 
    
    else 
    {
      // login
      $user = json_decode(json_encode($_SESSION['user']));
      $url = $user->id == session_id() ? 'main' : 'sign';
    }

    // formatting url
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    // url shape is /controllerName/method/ => url[0]=controllerName / url[1]=method
    
    // folder/controllerName.php
    $fileControllers = './controllers/' . $url[0] . '.php';

    // $fileControllers exist ?
    if (file_exists($fileControllers)) 
    {
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
        print_r(json_encode(["error" => $error->getMessage()]));
      }
    } 

    // whether $fileControllers does not exist
    else 
    {
      $controller = new ControllerErr();
      $controller->render();
    }
  }
}

?>