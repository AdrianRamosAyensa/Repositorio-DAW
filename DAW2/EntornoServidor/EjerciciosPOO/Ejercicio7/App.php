<?php

class App
{

  public $fibbo = [];

  public function __construct($name = "Aplicación PHP")
  {
    echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Ester Grao";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    // El método a ejecutar depende de un argumente $GET 
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'fibonacci';
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

  public function fibonacci()
  {
      $numero2 = 0;
    $arrFibonacci = [];

    $i = 0;

    array_push( $arrFibonacci, 1 );

    while ($numero2 < 1000000){
      if ( $i == 0 ) {
        $numero2 += $arrFibonacci[ count( $arrFibonacci ) - 1 ];
        $i++;
      } else {
        $numero2 += $arrFibonacci[ count( $arrFibonacci ) - 2 ];
      }
        if ( $numero2 < 1000000 ) {
          array_push( $arrFibonacci, $numero2 );
        }
    }

    foreach ( $arrFibonacci as $numero ) {
        echo $numero;
        echo '<br>';
    }
    
  }

  public function potencias() {
    for ($i=0; $i < 24; $i++) { 
      $resultado = pow(2, $i);
      echo $resultado . '<br>';
    }
  }

  public function factoriales() {

    $numero = 1;
    for ($i=1;; $i++) { 
      
      $resultado = $numero * $i;


      if ( $resultado <= 1000000 ){
        echo '<p>' . $numero . ' * ' . $i . ' = ' . $resultado . '</p>';
        $numero = $resultado;
      } else { break; }

    }

  }

  public function primos() {

    for ($numero=1; $numero < 10000; $numero++) { 
      $primo = true;
      for ($i=2; $i < $numero; $i++) { 
        if ( $numero % $i == 0 ) {
          $primo = false;
        }
      }
      if ($primo) {
        echo '<p>' . $numero . ' es primo</p>';

      }
    }

  }
  
  public function login()
  {
    echo "Estamos en login <br>";
    include('views/form.php');
  }  
}
