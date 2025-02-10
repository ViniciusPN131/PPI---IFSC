<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: 13p1.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario_logado']; ?>!</h2>
    <p>Você está logado no sistema.</p>
    
    <form action="13p3.php" method="POST">
        <button type="submit">Sair</button>
    </form>
</body>
</html>
