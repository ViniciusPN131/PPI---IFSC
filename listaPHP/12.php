<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 12</title>
</head>
<body>
  <h1>Calcular a Soma, Maior e Menor Número</h1>

  <form method="POST">
    <label for="numeros">Informe os números (separados por vírgula):</label><br>
    <input type="text" id="numeros" name="numeros" required><br><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entrada = $_POST['numeros'];

    $numeros = array_map('trim', explode(',', $entrada));

    if (count($numeros) > 0) {
      $numeros = array_map('intval', $numeros);

      $soma = array_sum($numeros);

      $maior = max($numeros);

      $menor = min($numeros);

      echo "<h2>Resultados:</h2>";
      echo "Números informados: " . implode(", ", $numeros) . "<br>";
      echo "Soma de todos os números: " . $soma . "<br>";
      echo "Maior número: " . $maior . "<br>";
      echo "Menor número: " . $menor . "<br>";
    } else {
      echo "<p style='color: red;'>Por favor, insira números válidos.</p>";
    }
  }
  ?>

</body>
</html>
