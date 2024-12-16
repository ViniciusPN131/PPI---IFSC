<?php
session_start();

// Verifica se os campos de login e senha foram enviados
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: login.html");
    exit();
}

// Verifica se os dados estão corretos
if ($_POST["username"] != "admin" || $_POST["password"] != "123mudar") {
    header("Location: login.html");
    exit();
}

// Se o login e a senha estiverem corretos, cria a sessão
$_SESSION["login"] = "admin"; // Você pode armazenar mais dados aqui, se necessário

// Verifique a variável de sessão
var_dump($_SESSION);  // Adicione esta linha para verificar se a variável de sessão foi criada corretamente

// Redireciona para a página principal (main.php)
header("Location: main.php");
exit();
?>
