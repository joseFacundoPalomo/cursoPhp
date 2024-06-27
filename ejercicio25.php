<?php

    class persona{

        public $nombre;
        private $edad;

        public function asignarNombre($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }       
         
        public function imprimirNombre(){
            echo "Hola soy".$this->nombre;
        }

        public function imprimirEdad(){
            $this-> edad=31;
            return $this->edad;           
        }

    }

     $alumno = new persona();
     $alumno->asignarNombre("Facundo Palomo");

     class trabajador extends persona{
        public $ocupacion;



        public function presentarse(){   
            $this->ocupacion="Diseñador Web";
            echo "mi nombre es ".$this->nombre.", mi ocupación es ".$this->ocupacion;
        }
     }

     $persona = new trabajador();
     $persona->asignarNombre("Matt Damon");
     $persona->presentarse();

 
?>
