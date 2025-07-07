<?php
include("conexao.php");

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$sql = "INSERT INTO comunicados (titulo, conteudo) VALUES ('$titulo', '$conteudo')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao salvar: " . $conn->error;
}
?>