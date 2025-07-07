<?php
include("conexao.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM comunicados WHERE id = $id");
$comunicado = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Comunicado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="my-4">Editar Comunicado</h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $comunicado['id']; ?>">
        <div class="mb-3">
            <label class="form-label">Título:</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $comunicado['titulo']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Conteúdo:</label>
            <textarea name="conteudo" class="form-control" required><?php echo $comunicado['conteudo']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>