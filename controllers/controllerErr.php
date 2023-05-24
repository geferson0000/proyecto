<?php

class ControllerErr extends Controller 
{
  private $error;
  public function __construct(object $error)
  {
    parent::__construct();
    $this->error = $error;
    $error = json_encode([
      "message" => $this->error->getMessage(),
      "code" => $this->error->getCode(),
    ]);
    print_r("
    <div class='error' style='display: none;'>" . 
    $error . 
    "</div>");
  }
  
  public function render()
  {
    $this->view->render('error');
  }

  // public function getError():object
  // {
  //   return $this->error;
  // }
}

?>