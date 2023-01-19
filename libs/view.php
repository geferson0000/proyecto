<?php

class View {
  public $message;
  function __construct(){
    echo '<p>the view</p>';
  }

  function render($name) {
    require_once ('./views/' . $name . '/index.php');
  }
}

?>