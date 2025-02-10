<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 6</title>
</head>
<body>
  <h1>Par ou Ímpar</h1>

  <form method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <input type="submit" value="Verificar">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
      $resultado = "Par";
    } else {
      $resultado = "Ímpar";
    }

    echo "<h2>O número informado foi: $numero</h2>";
    echo "<h2>O número $numero é: $resultado</h2>";
  }
  ?>

</body>
</html>
