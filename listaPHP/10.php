<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibição de Intervalo</title>
  <style>
    .numero {
      font-size: 20px;
      font-weight: bold;
      color: white;
      background-color: #4CAF50;
      padding: 5px;
      margin: 5px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <h1>Informe um Intervalo de Números</h1>

  <form method="POST">
    <label for="inicio">Número Inicial:</label>
    <input type="number" id="inicio" name="inicio" required><br><br>

    <label for="fim">Número Final:</label>
    <input type="number" id="fim" name="fim" required><br><br>

    <input type="submit" value="Exibir Intervalo">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];

    if ($inicio <= $fim) {
      echo "<h2>Números do Intervalo:</h2>";
      for ($i = $inicio; $i <= $fim; $i++) {
        echo "<span class='numero'>$i</span>";
      }
    } else {
      echo "<p style='color: red;'>O número inicial deve ser menor ou igual ao número final.</p>";
    }
  }
  ?>

</body>
</html>
