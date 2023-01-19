<?php
require_once './libs/controller.php';

class help extends Controller {
  function __construct(){
    parent::__construct();
    $this->view->render('help');
  }
}

?>