<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="get">

        <label for="a">Numero A: </label>
        <input id="a" type="text" name="a">

        <label for="b">Numero B: </label>
        <input id="b" type="text" name="b">

        <input type="submit" value="Gerar">

    </form>
    <?php
    
        function rondomize($a, $b){
            echo rand($a,$b);
        }
        
    ?>
    <h1><?php
        if (isset($_GET["a"]) && isset($_GET["b"])) {
            rondomize($_GET["a"], $_GET["b"]);
        }
        
    ?></h1>
</body>
</html>