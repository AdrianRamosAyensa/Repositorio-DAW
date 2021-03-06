<?php

//creamos la clase
class Logica
{

    private $arrayNumeros;
    private $operacion;

    //construimos el constructor de clase
    public function __construct($name = "Ejercicio01 PHP")
    {

        //atributos de clase
        $this->name = $name;
        $this->arrayNumeros;
        $this->operacion;
    }

    //funcion run
    public function run()
    {
        $nFuncion = 1;
        if(isset($_GET['method'])){
            $nFuncion = $_GET['method']; 
        }else{
            //include("C:\\Users\\Ramos\\Source\\Repositorio-DAW\\DAW2\\EntornoServidor\\ejercicio01\\index.php");
        }
        

        switch ($nFuncion) {
            case 1:
                $this->operacion = "FIBONACCI";
                $this->fibonacci();
                $this->index();
                break;
            case 2:
                $this->operacion = "POTENCIAS";
                $this->potencias();
                $this->index();
                break;
            case 3:
                $this->operacion = "FACTORIALES";
                $this->factoriales();
                $this->index();
                break;
            case 4:
                $this->operacion = "PRIMOS";
                $this->primos();
                $this->index();
                break;
            default:
                echo "ERROR";
                break;
        }
    }

    public function fibonacci()
    {
        $this->arrayNumeros = [0 => 0, 1 => 1];
        $numero = 0;
        $a = 0;
        $b = 1;
        $arrPos = 2;
        do {
            $numero = $a + $b;
            if ($numero < 1000000) {
                $this->arrayNumeros[$arrPos] = $numero;
                $arrPos++;
                $a = $b;
                $b = $numero;
            };
        } while ($numero < 1000000);
    }

    public function potencias()
    {
        for ($i = 1; $i <= 24; $i++) {
            $this->arrayNumeros[$i - 1] = pow(2, $i);
        }
    }

    public function factoriales()
    {
        $this->arrayNumeros[0] = 1;
        $resultado = 1;
        for ($i = 1; $resultado < 1000000; $i++) {
            $resultado = $resultado * $i;
            if ($resultado < 1000000) {
                $this->arrayNumeros[$i] = $resultado;
            }
        }
    }

    public function primos()
    {
        $contador = 0;
        for ($i = 1; $i <= 10000; $i++) {
            for($j = 1; $j <= $i; $j++){
                if($i%$j == 0){
                    $contador++;
                }
            }
            if($contador==2){
                $this->arrayNumeros[$i]=$i;
            }
            $contador=0;
        }
    }

    public function index()
    {
        include('views/index.php');
    }
}
