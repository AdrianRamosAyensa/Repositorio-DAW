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
      $method = 'login';
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

  public function auth() {
    $login = $_POST['login'];

    $cookieValue = [];
    
    $cookieValue[ 'Usuario' ] = $login[0];
    $cookieValue[ 'Pass' ] = $login[1];
    
    setcookie("loginUsuario", $cookieValue);
    $_COOKIE[ 'loginUsuario' ] = $cookieValue;
    
    //header("Location: ?method=home");
    App::home();
    
  }

  public function home() {
    if ( !isset( $_COOKIE[ 'loginUsuario' ] ) ) {
      header("Location: ?method=login");
    }
    include ('_Home.php');
  }
  
  public function login() {
    echo "Estamos en login <br>";
    include('Login.php');
  }  
}
