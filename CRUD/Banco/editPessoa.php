<?php
    include_once("Database.php");
    include_once("PessoaDAO.php");

    if (isset($_GET["pessoa_id"])) {
        $id2 = $_GET["pessoa_id"];
        $pessoa = getUsuario($id2);
    } else {
        die("Pessoa não encontrada");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            font-size: 2em;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 20px;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .form-container fieldset {
            border: none;
            padding: 0;
        }

        .form-container legend {
            font-size: 1.5em;
            font-weight: 600;
            color: #2b6cb0;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1em;
            text-align: left;
            color: #2d3748;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1em;
            background-color: #f9fafb;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4A90E2;
            outline: none;
        }

        input[type="submit"],
        .delete-btn {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"] {
            background-color: #4A90E2;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #3b7bbf;
        }

        .delete-btn {
            background-color: #e53e3e;
            color: white;
            margin-top: 10px;
        }

        .delete-btn:hover {
            background-color: #c53030;
        }

        .delete-btn:focus {
            outline: none;
        }

        .form-footer {
            font-size: 0.9em;
            margin-top: 20px;
            color: #6B7280;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Editar Pessoa</h2>

        <form action="pessoaControle.php" method="post">
            <input type="hidden" name="id" value="<?php echo $pessoa['id']; ?>">

            <fieldset>
                <legend>Informações do Usuário</legend>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $pessoa['nome']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $pessoa['email']; ?>" required>

                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" value="<?php echo $pessoa['usuario']; ?>" required>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" value="<?php echo $pessoa['senha']; ?>" required>

                <input type="hidden" name="acao" value="editar">
                <input type="submit" value="Salvar alterações">
            </fieldset>

            <button type="submit" name="acao" value="delete" class="delete-btn">Excluir Usuário</button>
        </form>

        <div class="form-footer">
            <p>Deseja cancelar? Volte para <a href="Listar.php">a lista de usuários</a>.</p>
        </div>
    </div>

</body>
</html>
