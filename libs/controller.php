<?php
require_once './libs/view.php';

class Controller {
  public $model;
  public $view;
  function __construct(){
    $this -> view = new View();
  }
  function loadModel($model){
    $url = 'models/' . $model . 'model.php';
    echo "<div class='result'>Loading model</div>";
    
    if (file_exists($url)){
      require $url;
      
      echo "<div class='result'>model loaded</div>";
      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }
}
?>