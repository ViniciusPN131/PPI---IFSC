<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Peso e Altura</title>
</head>
<body>
  <h1>Cadastro de Peso e Altura</h1>

  <?php
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  ?>

  <form action="9p3.php" method="POST">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">

    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" name="peso" required><br><br>

    <label for="altura">Altura (m):</label>
    <input type="number" id="altura" name="altura" step="0.01" required><br><br>

    <input type="submit" value="Calcular IMC">
  </form>
</body>
</html>
