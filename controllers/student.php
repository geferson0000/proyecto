<?php
class Student extends Controller 
{
  function __construct()
  {
    parent :: __construct();
  }
  
  function render()
  {
    $this->view->render('student');
  }

  public function apiGet():array
  {
    $response = $this->model->get();
    return $response;
  }

  public function apiPost():array
  {
    $response = $this->model->insert($_POST);
    return $response;
  }

  public function apiPut():array
  {
    $response = $this->model->update(
      $_GET["student"], 
      $_GET["column"], 
      $_GET["value"]
    );
    return $response;
  }
  
  public function apiDelete():array
  {
    $response = $this->model->delete($_GET["cedula"]);
    return $response;
  }

  public function api():string
  {
    try 
    {
      $method = ($_SERVER["REQUEST_METHOD"]);
      switch ($method)
      {
        case 'GET':
          $response = $this->apiGet();
        break;

        case 'POST':
          $response = $this->apiPost();
        break;

        case 'PUT':
          $response = $this->apiPut();
        break;

        case 'DELETE':
          $response = $this->apiDelete();
        break;
      } 
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