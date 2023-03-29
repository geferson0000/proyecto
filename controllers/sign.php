<?php
class Sign extends Controller {
  public $token;
  function __construct(){
    parent :: __construct();
    $this->token = md5(uniqid(mt_rand(), true));
    $_SESSION['token'] = $this->token;
  }
  
  function render(){
    $this->view->render('sign');
  }

  function login(){
    try {
      $_SESSION['user'] = $this->model->login($_POST['username'], $_POST['password']);
    } catch (\Throwable $th) {
      echo "<div>";
      print_r($th);
      echo "</div>";
    }
    return print_r(json_encode($_SESSION['user']));
  }

  function logout(){
    session_destroy();
    $this->reload();
  }

  function reload(){
    $page = constant('URL');
    header("location: $page");
    exit();
  }

}
?>