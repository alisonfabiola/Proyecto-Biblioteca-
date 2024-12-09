<?php
session_start();
require_once '../models/Libro.php';
require_once '../models/Biblioteca.php';

$biblioteca = $_SESSION['biblioteca'] ?? new Biblioteca();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $mensaje = $biblioteca->prestarLibro($titulo);
    echo "<p>$mensaje</p>";
    echo '<a href="../index.php">Volver al inicio</a>';
}
?>
