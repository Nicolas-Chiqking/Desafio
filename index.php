<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Comunicados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="my-4">Lista de Comunicados</h2>
    <a href="criar.php" class="btn btn-primary mb-3">Novo Comunicado</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM comunicados ORDER BY data_criacao DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['titulo']}</td>
                <td>{$row['conteudo']}</td>
                <td>{$row['data_criacao']}</td>
                <td>
                    <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                    <a href='excluir.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm'>Excluir</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>