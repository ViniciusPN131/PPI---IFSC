<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 8</title>
</head>
<body>
  <h1>Informar e Verificar a String</h1>

  <form method="POST">
    <label for="string">Digite uma string:</label>
    <input type="text" id="string" name="string" required><br><br>
    <input type="submit" value="Verificar">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = $_POST['string'];

    $tamanho = strlen($string);

    $stringSemEspacos = str_replace(' ', '', strtolower($string));
    $palindromo = ($stringSemEspacos == strrev($stringSemEspacos)) ? 'Sim' : 'Não';

    $vogais = preg_match_all('/[aeiouAEIOU]/', $string, $matches);

    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $string, $matches);

    echo "<h2>Resultados:</h2>";
    echo "<p>Tamanho da string: $tamanho</p>";
    echo "<p>É um palíndromo? $palindromo</p>";
    echo "<p>Número de vogais: $vogais</p>";
    echo "<p>Número de consoantes: $consoantes</p>";
  }
  ?>

</body>
</html>
