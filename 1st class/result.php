<?php
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $total = $num1 + $num2;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body{font-family:Cambria;}
        h2{color:red}
    </style>
</head>
<body>
    <h2>El resultado de la suma es = <?php echo $total ?></h2>
</body>
</html>