<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 7</title>
</head>
<body>
  <h1>Tabuada</h1>

  <form method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required><br><br>
    <input type="submit" value="Ver Tabuada">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    echo "<h2>Tabuada de $numero</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    for ($i = 1; $i <= 10; $i++) {
      $resultado = $numero * $i;
      echo "<tr><td>$numero x $i</td><td>= $resultado</td></tr>";
    }
    echo "</table>";
  }
  ?>

</body>
</html>
