<?php
class Sign extends Controller 
{
  public $token;
  public function __construct()
  {
    parent :: __construct();
    $this->token = md5(uniqid(mt_rand(), true));
    $_SESSION['token'] = $this->token;
  }
  
  public function render():void
  {
    header("HTTP/ 200 ok");
    $this->view->render('sign');
  }

  public function login():string
  {
    header("HTTP/ 200 ok");
    $_SESSION['user'] = $this->model->login($_POST['username'], $_POST['password']);
    return json_encode($_SESSION['user']);
  }

  public function logout():string
  {
    session_destroy();
    header("HTTP/ 200 ok");
    return json_encode(["ok" => true]);
  }
}
?>