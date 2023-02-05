<?php
class Newer extends Controller {
  function __construct(){
    parent :: __construct();
    $this->view->render('newer');
  }

  function studentRegister(){
    echo "student registered";
  }
}

?>