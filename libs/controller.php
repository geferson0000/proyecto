<?php
require_once './libs/view.php';

class Controller {
  public $view;
  function __construct()
  {
    echo '<p>base controller</p>';
    $this -> view = new View();
  }
}
?>