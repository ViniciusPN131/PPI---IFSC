<?php
session_start();

if (isset($_SESSION['usuario_logado'])) {
    header('Location: 13p2.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = 'admin';
    $senha = '1234';

    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    // Valida o login
    if ($usuario_digitado === $usuario && $senha_digitada === $senha) {
        $_SESSION['usuario_logado'] = $usuario;
        header('Location: 13p2.php');
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    }
    ?>
    <form action="13p1.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
