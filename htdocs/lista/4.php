<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        function rondomize(){
            echo rand(1,100);
        }
        
    ?>
    <h1><?php
        rondomize();
    ?></h1>
</body>
</html>