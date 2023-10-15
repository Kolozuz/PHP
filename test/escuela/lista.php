<?php

include 'sql.php';
$conexion = new Inscripcion();
$conexion->Bdconnect();
$sql = "SELECT * FROM inscripcion";

$anadir = $conexion->stm->prepare($sql);
$anadir->execute();

$personas = $anadir->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
        <table class="table table-hover">
            <tr>             
                <th>NOMBRE DEL CURSO AL QUE ASPIRA</th>
                <th>Fechas de diligenciamiento</th>
                <th>apellido</th>
                <th>nombre</th>
                <th>lugar_nacimiento</th>
                <th>fecha_nacimiento</th>
                <th>edad</th>
                <th>genero</th>
                <th>tipo_documento</th>
                <th>numero_documento</th>
                <th>lugar_expedicion</th>
                <th>estado_civil</th>
                <th>desplazado</th>
                <th>desvinculado</th>
                <th>madre_soltera</th>
                <th>tiene_hijos</th>
                <th>cuantos_hijos</th>
                <th>direccion</th>
                <th>estrato</th>
                <th>telefono_fijo</th>
                <th>celular</th>
                <th>email</th>
                <th>contributivo</th>
                <th>eps</th>
                <th>cotizante</th>
                <th>beneficiario</th>
                <th>subsidiado_sisben</th>
                <th>puntaje_sisben</th>
                <th>gp_sangre_rh</th>
                <th>emergencia_nombre</th>
                <th>emergencia_telefono</th>
                <th>tiene_enfermedad</th>
                <th>que_enfermedad</th>
                <th>tiene_discapacidad</th>
                <th>que_discapacidad</th>
            </tr>
            <?php foreach ($personas as $p) { ?>
            <tr>
                <td><?php echo $p ->nombre_curso_aspira ?></td>
                <td><?php echo $p ->fecha_diligenciamiento ?></td>
                <td><?php echo $p ->apellido ?></td>
                <td><?php echo $p ->nombre ?></td>
                <td><?php echo $p ->lugar_nacimiento ?></td>
                <td><?php echo $p ->fecha_nacimiento ?></td>
                <td><?php echo $p ->edad ?></td>
                <td><?php echo $p ->genero ?></td>
                <td><?php echo $p ->tipo_documento ?></td>
                <td><?php echo $p ->numero_documento ?></td>
                <td><?php echo $p ->lugar_expedicion ?></td>
                <td><?php echo $p ->estado_civil ?></td>
                <td><?php echo $p ->desplazado ?></td>
                <td><?php echo $p ->desvinculado ?></td>
                <td><?php echo $p ->madre_soltera ?></td>
                <td><?php echo $p ->tiene_hijos ?></td>
                <td><?php echo $p ->cuantos_hijos ?></td>
                <td><?php echo $p ->direccion ?></td>
                <td><?php echo $p ->estrato ?></td>
                <td><?php echo $p ->telefono_fijo ?></td>
                <td><?php echo $p ->celular ?></td>
                <td><?php echo $p ->email ?></td>
                <td><?php echo $p ->contributivo ?></td>
                <td><?php echo $p ->eps ?></td>
                <td><?php echo $p ->cotizante ?></td>
                <td><?php echo $p ->beneficiario ?></td>
                <td><?php echo $p ->subsidiado_sisben ?></td>
                <td><?php echo $p ->puntaje_sisben ?></td>
                <td><?php echo $p ->gp_sangre_rh ?></td>
                <td><?php echo $p ->emergencia_nombre ?></td>
                <td><?php echo $p ->emergencia_telefono ?></td>
                <td><?php echo $p ->tiene_enfermedad ?></td>
                <td><?php echo $p ->que_enfermedad ?></td>
                <td><?php echo $p ->tiene_discapacidad ?></td>
                <td><?php echo $p ->que_discapacidad ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <script src="alertaHD.js"></script>
</body>
</html>