<?php
class Biblioteca {
    private $libros;

    public function __construct() {
        $this->libros = [];
    }

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function buscarLibroPorTitulo($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->getTitulo() === $titulo) {
                return $libro;
            }
        }
        return null;
    }

    public function prestarLibro($titulo) {
        $libro = $this->buscarLibroPorTitulo($titulo);
        if ($libro && !$libro->isPrestado()) {
            $libro->prestar();
            return "El libro '{$titulo}' ha sido prestado.";
        } elseif ($libro) {
            return "El libro '{$titulo}' ya está prestado.";
        }
        return "No se encontró el libro '{$titulo}'.";
    }

    public function devolverLibro($titulo) {
        $libro = $this->buscarLibroPorTitulo($titulo);
        if ($libro && $libro->isPrestado()) {
            $libro->devolver();
            return "El libro '{$titulo}' ha sido devuelto.";
        } elseif ($libro) {
            return "El libro '{$titulo}' no estaba prestado.";
        }
        return "No se encontró el libro '{$titulo}'.";
    }
}
