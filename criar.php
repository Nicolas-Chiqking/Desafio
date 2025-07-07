<!DOCTYPE html>
<html>
<head>
    <title>Novo Comunicado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="my-4">Novo Comunicado</h2>
    <form action="salvar.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Conteúdo:</label>
            <textarea class="form-control" name="conteudo" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>