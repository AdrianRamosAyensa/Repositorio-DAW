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
    
  }

  public function fibonacci()
  {
      $numero2 = 0;
    $arrFibonacci = [];

    array_push( $arrFibonacci, 1 );

    while ($numero2 < 1000000){
        $numero2 += $arrFibonacci[ count( $arrFibonacci ) - 1 ];
        array_push( $arrFibonacci, $numero2 );
    }

    foreach ( $arrFibonacci as $numero ) {
        echo $numero;
        echo '<br>';
    }
    
  }
  
  public function login()
  {
    echo "Estamos en login <br>";
    include('views/form.php');
  }  
}