<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "comunicados_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>