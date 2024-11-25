<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Somar dois números e pipipi popopo

    <form method="POST">
        <label for="a">Número A: </label>
        <input type="number" name="a" id="a" required>
        <br>
        <label for="b">Número B: </label>
        <input type="number" name="b" id="b" required>
        <br>
        <input type="submit" value="Somar">
    </form>

    <?php 
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        die();
echo "<script>

        alert('informe a e b');

    </script>";

        $a = $_POST["a"];
        $b = $_POST["b"];
        echo "<p>Soma: " . ($a + $b) . "</p>"; 
    }
    ?>
    
    <p>SOMA: <?php 
        if (isset($a) && isset($b)) {
            echo ($a + $b);
        } else {
            echo "0"; 
        }
    ?></p> 
</body>
</html>
