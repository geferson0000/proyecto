<?php
class History extends Controller 
{
  public function __construct()
  {
    parent::__construct();
  }
  public function render():void
  {
    $this->view->render('history');  
  }

  public function apiGET():array
  {
    $response = $this->model->get();
    return $response;
  }

  public function apiPOST():array
  {
    $response = $this->model->insert($_POST);
    return $response;
  }

  public function apiPUT():array
  {
    $response = $this->model->update(
      $_GET["student"], 
      $_GET["column"], 
      $_GET["value"]
    );
    return $response;
  }
  
  public function apiDELETE():array
  {
    $response = $this->model->delete($_GET["cedula"]);
    return $response;
  }

  public function api():string
  {
    try 
    {
      $method = ($_SERVER["REQUEST_METHOD"]);
      $method = "api" . $method;
      $response = $this->{$method}();
      header("http/ 200 OK");
      return json_encode($response);
    }
      
    catch (\Throwable $th) 
    {
      header("http/ 500 OK");
      $response = json_encode($th);
      return $response; 
    }
  }
}


?>