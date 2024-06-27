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

        $alumno->imprimirNombre();

        $alumno2 = new persona();       
        
        $edad = $alumno2->imprimirEdad();

        echo $edad;
        
        
         

?>
