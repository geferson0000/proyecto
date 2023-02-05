<?php
class Newer extends Controller {
  function __construct(){
    parent :: __construct();
    $this->view->render('newer');
  }

  function studentRegister(){
      echo "<div class='result'>using method studentRegistered()</div>";
    $this->model->insert();
  }
}

?>