<?php
include("conexao.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$sql = "UPDATE comunicados SET titulo='$titulo', conteudo='$conteudo' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao atualizar: " . $conn->error;
}
?>