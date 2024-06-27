<?php

    class persona{

        public $nombre;
        private $edad;

        function __construct($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }

        public function asignarNombre($nuevoNombre){
            $this->nombre=$nuevoNombre;
        } 
        public function imprimirNombre(){
            echo "Hola soy".$this->nombre;
        }
        public function mostrarEdad(){
            $this-> edad=31;
            return $this->edad;           
        }

    }

     $alumno = new persona(" Boris");
     $alumno->imprimirNombre();
     //$alumno->asignarNombre("Facundo Palomo");     
 
?>
