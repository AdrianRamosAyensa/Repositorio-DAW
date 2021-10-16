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

    $numero1 = 1;
    $numero2 = 0;

    while ($numero2 < 1000000){ 
      $numero2 += $numero1;
      $numero2 = $numero1;
    }
    
  }
  
  public function login()
  {
    echo "Estamos en login <br>";
    include('views/form.php');
  }  
}
