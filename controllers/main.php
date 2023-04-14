<?php

class Main extends Controller {
  function __construct(){
    parent :: __construct();
  }
  
  function render(){
    $this->view->render('main');
  }

  function hello() {
    echo '<p>I am waving</p>';
  }
}

?>