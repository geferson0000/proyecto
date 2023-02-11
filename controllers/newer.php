<?php
class Newer extends Controller {
  function __construct(){
    parent :: __construct();
    $this->view->render('newer');
  }

  function studentRegister(){
    //echo "<div class='result'>using method studentRegistered()</div>";
    // variables
    $cedula = $_POST['cedula'];
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secondName'];
    $lastName = $_POST['lastName'];
    $lastSecondName = $_POST['lastSecondName'];
    $adress = $_POST['adress'];
    $singDate = $_POST['registrationDate'];
    $phone = $_POST['phone'];


    $this->model->insert([
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
  }
}
// 'cedula' => $_POST['registrationDate'],
?>