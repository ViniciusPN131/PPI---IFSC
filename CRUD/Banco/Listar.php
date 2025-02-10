<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Para os elementos ficarem empilhados */
        }

        h2 {
            color: #2d3748;
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
        }

        .table-container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding-top: 20px; /* Espaço entre o topo da tela e a tabela */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 16px;
            text-align: left;
            font-size: 16px;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background-color: #4A90E2;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        td {
            background-color: #ffffff;
        }

        tr:nth-child(even) td {
            background-color: #f9fafb;
        }

        tr:hover td {
            background-color: #e2e8f0;
        }

        td a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 600;
        }

        td a:hover {
            text-decoration: underline;
        }

        .table-footer {
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #6B7280;
        }

        .btn-sair, .btn-cadastrar {
            background-color: #4A90E2; /* Cor azul */
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 30px; /* Borda arredondada */
            cursor: pointer;
            font-size: 18px;
            position: absolute;
            top: 20px; /* Fica no topo da tela */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-sair {
            right: 20px; /* Alinha à direita */
        }

        .btn-cadastrar {
            right: 120px; /* Coloca o botão de cadastrar à esquerda do botão de sair */
        }

        .btn-sair:hover, .btn-cadastrar:hover {
            background-color: #357ABD; /* Cor mais escura ao passar o mouse */
            transform: scale(1.05); /* Leve aumento do tamanho ao passar o mouse */
        }

    </style>
</head>
<body>

    <button class="btn-sair" onclick="window.location.href='Login.php';">Sair</button>
    <button class="btn-cadastrar" onclick="window.location.href='Cadastrar.php';">Cadastrar</button>

    <div class="table-container">
        <h2>Lista de Usuários</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Usuário</th>
                    <th>Senha</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once("Database.php");
                    include_once("PessoaDAO.php");

                    $listaPessoa = getUsuarios();

                    foreach ($listaPessoa as $pessoa) {
                ?>
                    <tr>
                        <td>
                            <a href="editPessoa.php?pessoa_id=<?php echo $pessoa['id']; ?>">
                                <?php echo $pessoa['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $pessoa['nome']; ?></td>
                        <td><?php echo $pessoa['email']; ?></td>
                        <td><?php echo $pessoa['usuario']; ?></td>
                        <td><?php echo $pessoa['senha']; ?></td> 
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <div class="table-footer">
            <p>Exibindo todos os usuários cadastrados.</p>
        </div>
    </div>

</body>
</html>
