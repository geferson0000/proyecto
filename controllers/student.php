<?php
class Student extends Controller {
  public $message;
  function __construct(){
    parent :: __construct();
  }
  
  function render(){
    if ($this->message != null){
      echo $this->message;
    };
    $this->get();
    $this->view->render('student');
  }

  function get() {
    $this->view->message = $this->model->get();
    $this->message = $this->view->message;
  }
  
  function insert(){
    echo "<div class='result'>using method insert()</div>";

    $this->model->insert(
      [
        'cedula' => $_POST['cedula'],
        'firstName' => $_POST['firstName'],
        'secondName' => $_POST['secondName'],
        'lastName' => $_POST['lastName'],
        'lastSecondName' => $_POST['lastSecondName'],
        'adress' => $_POST['adress'],
        'phone' => $_POST['phone'],
        'gender' => $_POST['gender'],
        'birthdate' => $_POST['birthdate']
      ]
    );
    $this->view->render('student');
  }
}
?>