<?php

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];

    include 'connection.php';

    $connection = new Connection();
    $connection->db_connect();
    $sql = "INSERT INTO person(nombres_person,apellidos_person,telefono_person,direccion_person,fechanac_person,email_person) VALUES ('$name', '$lastname', '$tel','$adress','$birthdate','$email')";

    $insert = $connection->stm->prepare($sql);
    $insert->execute();

    header("location: listado.php")

?>