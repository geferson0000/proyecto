<?php

class View {
  public $message;
  function __construct(){
  }

  function render($name) {
    require_once ('./views/' . $name . '/index.php');
  }
}

?>