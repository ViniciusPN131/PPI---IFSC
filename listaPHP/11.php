<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classificar Triângulo</title>
</head>
<body>
  <h1>Classificar Triângulo</h1>

  <!-- Formulário para o usuário inserir os três lados -->
  <form method="POST">
    <label for="lado1">Lado 1:</label>
    <input type="number" id="lado1" name="lado1" required><br><br>

    <label for="lado2">Lado 2:</label>
    <input type="number" id="lado2" name="lado2" required><br><br>

    <label for="lado3">Lado 3:</label>
    <input type="number" id="lado3" name="lado3" required><br><br>

    <input type="submit" value="Classificar Triângulo">
  </form>

  <?php
  // Verificar se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os lados do triângulo
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    // Verificar se os lados formam um triângulo válido
    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
      // Classificar o triângulo
      if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "<h2>O triângulo é Equilátero.</h2>";
      } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "<h2>O triângulo é Isósceles.</h2>";
      } else {
        echo "<h2>O triângulo é Escaleno.</h2>";
      }
    } else {
      echo "<p style='color: red;'>Os valores informados não formam um triângulo válido.</p>";
    }
  }
  ?>

</body>
</html>
