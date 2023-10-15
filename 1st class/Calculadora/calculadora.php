
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <fieldset>
    <legend>Calculator</legend>
    <form action="operacion.php" method="get">
        <label for="n1">1st Number</label>
        <input type="number" name="n1">
        <br><br>
        <label for="n2">2nd Number</label>
        <input type="number" name="n2">
        <br><br>
        <label for="op">Operation</label>
        <select name="op">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">*</option>
            <option value="division">/</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>