<?php
require_once './libs/view.php';

class Controller {
  public $model;
  public $view;
  function __construct(){
    $this -> view = new View();
  }
  function loadModel($model){
    echo "<div class='result'>Loading model</div>";
    $url = 'models/' . $model . 'model.php';

    if (file_exists($url)){
      require $url;

      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }
}
?>