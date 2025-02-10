<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 5</title>
</head>
<body>
  <h1>Sorteio de Número Aleatório</h1>

  <form method="POST">
    <label for="inicio">Informe o valor inicial:</label>
    <input type="number" id="inicio" name="inicio" required><br><br>

    <label for="fim">Informe o valor final:</label>
    <input type="number" id="fim" name="fim" required><br><br>

    <input type="submit" value="Sortear">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];

    if ($inicio < $fim) {
      $numeroSorteado = rand($inicio, $fim);

      echo "<h2>O número sorteado entre $inicio e $fim é: $numeroSorteado</h2>";
    } else {
      echo "<h2>Erro: O valor inicial deve ser menor que o valor final.</h2>";
    }
  }
  ?>

</body>
</html>
