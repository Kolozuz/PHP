<!DOCTYPE html>
<html lang="ES">
<head>
    <style>*{box-sizing: border-box;}</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>forms</title>
</head>
<body>
    <section class="container">
        <form action="insert_person.php" method="post">
            <div class="row" style="display: flex;">
                <div class="col-2" style="float:left;">
                    <img src="https://agenciapublicadeempleo.sena.edu.co/imgLayout/logos/LogoSENA-naranja_vector.png" alt="senalogo" width="200px">
                <div class="col-10 m-5">
                    <h2 class="text-center" style="margin-auto">FORMULARIO</h2>
                </div>   
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" placeholder="Ingrese su nombre" class="form-control">
                </div>
                <div class="col">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" placeholder="Ingrese su apellido" class="form-control" col>
                </div>
                <div class="col">
                    <label for="tel">Telefono</label>
                    <input type="text" name="tel" placeholder="Ingrese su telefono" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="adress">Direccion</label>
                    <input type="text" name="adress" placeholder="Ingrese su direccion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="birthdate">Fecha de Nacimiento</label>
                    <input type="date" name="birthdate" placeholder="YES" class="form-control">
                </div>
                <div class="col">
                    <label for="email">Correo Electronico</label>
                    <input type="text" name="email" placeholder="Ingrese su correo electronico" class="form-control" col>
                </div>
                <br><br><br>
                <div class="text-center">
                    <input type="submit" name="submit" value="Enviar">
                </div>
        </form>
    </section>
</body>
</html>