<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION["login"])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        /* Reset de estilos padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .main-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn-logout {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #e53935;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <h2>Bem-vindo à Página Principal</h2>
        <p>Olá, <?php echo isset($_SESSION["login"]) ? $_SESSION["login"] : "usuário desconhecido"; ?>! Você está logado.</p>
        <a href="logout.php">
            <button class="btn-logout">Sair</button>
        </a>
    </div>

</body>
</html>
