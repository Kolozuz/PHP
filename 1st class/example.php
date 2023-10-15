<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My 1st php page</title>
    <style>
        body{font-family:Cambria}
    </style>
</head>
<body>
    <h1>php Forms</h1>
    <fieldset style="border-radius:10px">
    <h3>Calculadora</h3>
    <form action="result.php" method="post">
        <label for="n1">Number 1</label>
        <input name="n1" type="number">
        <br><br>
        <label for="n2">Number 2</label>
        <input name="n2" type="number">
        <br><br>
        <input type="submit" >
    </form>
    </fieldset>
    <!-- /*
    $n1 = 5;
    if ($n1 >= 3 && $n2 >= 3) {
        echo "aprovado";
    }
    else{
        echo "reprovado";
    }
    */

    for ($i=0; $i < 10 ; $i++) { 
        echo "yomama<br>";
    }

    $a = 0;
    while ($a <= 10) {
        echo "yomama"."<br>" ; $a++;
    } -->
</body>
</html>