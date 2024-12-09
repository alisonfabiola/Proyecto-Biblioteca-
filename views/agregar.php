<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Libro</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Libro</h1>
        <form action="../actions/agregar.php" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <button type="submit" class="btn btn-success">Agregar Libro</button>
            <a href="../index.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
