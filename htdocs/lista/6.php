<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="a">a: </label>
        <input id="a" type="text" name="a">

        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_GET["a"])) {

        if ($_GET["a"] % 2 == 0) {

             echo $_GET["a"] . " é par";

        } else {

            echo $_GET["a"] . " é impar";

        }
        
    }
    ?>
</body>
</html>
