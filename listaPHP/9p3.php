<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página 3</title>
</head>
<body>
  <h1>Resultado do IMC</h1>

  <?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  $imc = $peso / ($altura * $altura);

  $imcFormatado = number_format($imc, 2, ',', '.');
  ?>

  <h2>Dados do Usuário:</h2>
  <p><strong>Nome:</strong> <?php echo $nome; ?></p>
  <p><strong>E-mail:</strong> <?php echo $email; ?></p>
  <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
  <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>

  <h2>IMC Calculado:</h2>
  <p><strong>IMC:</strong> <?php echo $imcFormatado; ?></p>

  <h3>Classificação do IMC:</h3>
  <?php
    if ($imc < 18.5) {
        echo "<p>Abaixo do peso</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Peso normal</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Sobrepeso</p>";
    } elseif ($imc >= 30 && $imc < 34.9) {
        echo "<p>Obesidade grau 1</p>";
    } elseif ($imc >= 35 && $imc < 39.9) {
        echo "<p>Obesidade grau 2</p>";
    } else {
        echo "<p>Obesidade grau 3</p>";
    }
  ?>

</body>
</html>
