<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    
    <?php
    function randomize() {
        $random_number = rand(1, 100);
        echo "<p>Valor Aleatório: $random_number</p>";
    }
    randomize();
    ?>

</body>
</html>
