<?php
include 'connection.php';
$connection = new Connection();
$connection->db_connect();
$sql = "SELECT * FROM person";
$read = $connection->stm->prepare($sql);
$read->execute();
$persons = $read->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listado Inscritos</title>
</head>
<body>
    <section class="container-fluid text-center">
        <div class="p-10">
            <h2>Ejemplo de un Listado</h2>
        </div>
    <table class="table table-striped table-bordered table-hover mt-4">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Fecha de Nacimiento</th>
            <th>e-mail</th>
            <th>Acciones</th>
        </tr>

<?php 
    foreach($persons as $a){?>
        <tr>
            <td><?php echo $a->nombres_person;?></td>
            <td><?php echo $a->apellidos_person;?></td>
            <td><?php echo $a->telefono_person;?></td>
            <td><?php echo $a->direccion_person;?></td>
            <td><?php echo $a->fechanac_person;?></td>
            <td><?php echo $a->email_person;?></td>
            <td>
                <a href="update_form.php?id=<?php echo $a->id_person;?>">
                    <button class="btn btn-primary">Update</button>
                </a>

                <button class="btn btn-warning" onclick="borrar('<?php echo $a->id_person;?>')">
                    Delete
                </button>
            </td>
        </tr>
<?php } ?>

    </table>
    </section>

    <script src="libraries/sweetalert.min.js">
        
    </script>

    <script>
        let id;
        function borrar(id){
            swal({
            title: "Esta seguro de que desea borrar los datos?",
            text: "Una vez eliminado, no sera posible recuperar ningun dato!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("El registro fue borrado con exito!", {
                icon: "success",
            });
            location.href = 'delete_person.php?id=' + id;
            } else {
                swal("No se borro el registro!");
            }
});
        }

    </script>
</body>
</html>