<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Devolver Libro</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Devolver Libro</h1>
        <form action="../actions/devolver.php" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <button type="submit" class="btn btn-danger">Devolver</button>
            <a href="../index.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>
