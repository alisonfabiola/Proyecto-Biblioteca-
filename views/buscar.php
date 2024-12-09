<?php
require_once '../src/Biblioteca.php';

session_start();

// Recuperar biblioteca de la sesión
$biblioteca = $_SESSION['biblioteca'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $resultado = $biblioteca->buscarLibroPorTitulo($titulo);

    if ($resultado) {
        echo "Libro encontrado: " . $resultado->getTitulo() . " por " . $resultado->getAutor();
    } else {
        echo "Libro no encontrado.";
    }
}
?>
<form method="POST">
    <input type="text" name="titulo" placeholder="Buscar por título" required>
    <button type="submit">Buscar Libro</button>
</form>
