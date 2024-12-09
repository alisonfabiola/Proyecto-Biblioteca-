<?php
class Libro {
    private $titulo;
    private $autor;
    private $categoria;
    private $prestado;

    public function __construct($titulo, $autor, $categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->prestado = false; // Por defecto no está prestado
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function isPrestado() {
        return $this->prestado;
    }

    public function prestar() {
        $this->prestado = true;
    }

    public function devolver() {
        $this->prestado = false;
    }
}
