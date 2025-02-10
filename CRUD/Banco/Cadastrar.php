<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        form {
            width: 100%;
            max-width: 420px;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            background-color: white;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        form h2 {
            color: #0073e6;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            text-align: left;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #0073e6;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #005bb5;
        }

        .form-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .form-footer a {
            color: #0073e6;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <form action="pessoaControle.php" method="post">
        <h2>Cadastro</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required>

        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" placeholder="Escolha um usuário" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Crie uma senha" required>

        <input type="text" name="acao" value="cadastrar" hidden>
        
        <input type="submit" value="Cadastrar">
        

    </form>
</body>
</html>
