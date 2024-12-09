<?php
session_start();
require_once '../models/Libro.php';
require_once '../models/Biblioteca.php';

if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = new Biblioteca();
}

$biblioteca = $_SESSION['biblioteca'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

    $libro = new Libro($titulo, $autor, $categoria);
    $biblioteca->agregarLibro($libro);

    echo "<p>El libro '{$titulo}' ha sido agregado exitosamente.</p>";
    echo '<a href="../index.php">Volver al inicio</a>';
}
?>
