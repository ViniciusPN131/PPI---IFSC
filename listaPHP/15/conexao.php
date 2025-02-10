<?php
$host = "localhost";
$usuario = "root";
$senha = "aluno";
$banco = "exemplo_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
