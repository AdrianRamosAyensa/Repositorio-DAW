<?php

class App
{


  public function __construct()
  {
    
  }

  public function run()
  {
    // El método a ejecutar depende de un argumente $GET 
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }
  
    try {
      $this->$method();      
    } catch (Throwable $th) {
      if (method_exists($this, $method)) {
        header("HTTP/1.0 500 Internal Server Error");
        return http_response_code(500);
        echo "Error en el servidor";
      } else {
        header("HTTP/1.0 404 Not Found");
        echo "No encontrado";      
      }  
    } finally {
      echo "<pre>";
      //print_r($th);
    }
  }

  public function home() {
    include ('Home.php');
  }

  public function colores() {
    include ('Colores.php');
  }

  public function cambio() {
   
      $color = $_GET[ 'color' ];
      $_SESSION['color'] = $color;                
    include('Home.php');
  }
  
}
