<?php

class View 
{
  private object $message;
  public function __construct(){}

  public function render(string $name):void
  {
    require ('./views/' . $name . '/index.php');
  }

  public function getMessage():object
  {
    return $this->message;
  }

  public function setMessage(object $message):void
  {
    $this->message = $message;
  }
}

?>