<?php 
    
    class Loteria {
        private $numeros = [];
    
        public function loteria($cantidad, $min, $max) {
            $this->numeros = [];
            for ($i = 0; $i < $cantidad; $i++) {
                $this->numeros[] = rand($min, $max);
            }
        }
    
        public function obtenerNumeros() {
            return $this->numeros;
        }
    }
?>
    
