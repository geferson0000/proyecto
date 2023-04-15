<?php

class View {
  public $message;
  function __construct(){
  }

  function render($name):void
  {
    require ('./views/' . $name . '/index.php');
  }
}

?>