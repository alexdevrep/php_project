<?php 
    class Libros{
        public $autor;
        public $titulo;
        public $ejemplares;
        public $genero;

        public function __construct($autor,$titulo,$ejemplares,$genero){
            $this->autor=$autor;
            $this->titulo=$titulo;
            $this->ejemplares=$ejemplares;
            $this->genero=$genero;
        }

        public function obtenerAutor(){
            return $this->autor;
        }
        public function obtenerTitulo(){
            return $this->titulo;
        }
        public function obtenerEjemplares(){
            return $this->ejemplares;
        }
        public function obtenerGenero(){
            return $this->genero;
        }
    }

