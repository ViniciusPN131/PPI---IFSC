<?php

include('conexao.php');

try {
    $stmt = $conn->query("SELECT * FROM usuarios");

    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                </tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['nome'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['telefone'] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "A tabela está vazia.";
    }
} catch (PDOException $e) {
    echo "Erro ao consultar os dados: " . $e->getMessage();
}
?>
