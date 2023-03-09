<?php

class View {
  public $message;
  function __construct(){
  }

  function render($name) {
    require ('./views/' . $name . '/index.php');
  }
}

?>