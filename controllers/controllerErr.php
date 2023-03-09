<?php

class ControllerErr extends Controller {
  function __construct(){
    parent::__construct();
    $this->view->message = 'error changing the resources';
  }
  
  function render(){
    $this->view->render('error');
  }
}

?>