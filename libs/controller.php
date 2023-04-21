<?php

require_once './libs/view.php';

abstract class Controller
{
  protected $model;
  protected $view;
  function __construct()
  {
    $this -> view = new View();
  }
  function loadModel($model)
  {
    //      /models/   <name>     Model.php
    $url = 'models/' . $model . 'Model.php';
    
    if (file_exists($url)){
      require $url;
      
      $modelName = $model . 'Model';

      // class <name>Model
      $this->model = new $modelName();
    }
  }
}
?>