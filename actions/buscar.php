<?php
session_start();
require_once '../models/Libro.php';
require_once '../models/Biblioteca.php';

$biblioteca = $_SESSION['biblioteca'] ?? new Biblioteca();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $libro = $biblioteca->buscarLibroPorTitulo($titulo);

    if ($libro) {
        echo "<p>Libro encontrado: {$libro->getTitulo()}, Autor: {$libro->getAutor()}, Categoría: {$libro->getCategoria()}</p>";
    } else {
        echo "<p>No se encontró el libro '{$titulo}'.</p>";
    }
    echo '<a href="../index.php">Volver al inicio</a>';
}
?>
