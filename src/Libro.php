<?php

class Libro {
    private $id;
    private $titulo;
    private $autor;
    private $categoria;
    private $estado; // Disponible o prestado

    public function __construct($titulo, $autor, $categoria, $estado = 'disponible') {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->estado = $estado;
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

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
