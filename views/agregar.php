<?php
require_once '../src/Libro.php';
require_once '../src/Biblioteca.php';

session_start();

// Crear biblioteca si no existe
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

    echo "Libro agregado con éxito.";
}
?>
<form method="POST">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="categoria" placeholder="Categoría" required>
    <button type="submit">Agregar Libro</button>
</form>
