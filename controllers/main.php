<?php
require_once './libs/controller.php';

class main extends Controller {
  function __construct(){
    parent :: __construct();
    $this->view->render('main');
    echo '<p>new main</p>';
  }

  function hello() {
    echo '<p>I am waving</p>';
  }
}

?>