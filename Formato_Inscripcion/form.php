<!DOCTYPE html>
<html lang="ES">
<head>
    <style>
        img{width: 120px;}
        #fondo_verde1,#fondo_verde2{background-color: #64993c;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscripcion a Formacion Tecnica</title>
</head>
<body>
<article class="container p-5">
    <form action="submit.php" method="post" autocomplete="on">
    <table class="table table-striped table-bordered table-hover text-center">
        <tr>
            <td rowspan="3"><img src="https://escuelataller.org/wp-content/uploads/2020/12/Logo_FETB_final-05-GMAIL.png" alt="logo"></td>
            <td>FORMATO DE INSCRIPCION <br> FORMACION TECNICO LABORAL</td>
            <td>Versión: 01</td>
        </tr>
        <tr>
            <td rowspan="2" class="p-4">Proceso de Formación</td>
            <td>Fecha: 10/2016</td>
            
        </tr>
        <tr>
            <td>Pagina 1 de 2</td>
        </tr>
    </table>
    <table class="table table-striped table-bordered table-hover container mt-4" >
        <tr>
            <td>NOMBRE DEL CURSO AL QUE ASPIRA</td>
            <td><input type="text" name="nombrecurso" class="form-control" placeholder="Ingrese el curso de su interes"></td>
        </tr>
        <tr>
            <td>FECHA DE DILIGENCIAMIENTO</td>
            <td ><input type="date" name="fechaform" class="form-control" placeholder="Ingrese la fecha actual"></td>
        </tr>
    </table>
    <table class="table table-striped table-bordered table-hover text-center">
        <tr>
            <th colspan="4" id="fondo_verde1">DATOS PERSONALES</th>
        </tr>
        <tr>
            <td>APELLIDOS</td>
            <td colspan="3">
                <input type="text" name="apellidos" class="form-control" placeholder="Ingrese sus apellidos">
            </td>
        </tr>
        <tr>
            <td>NOMBRES</td>
            <td colspan="3">
                <input type="text" name="nombres"     class="form-control" placeholder="Ingrese sus nombres nombres">
            </td>
        </tr>
        <tr>
            <td>LUGAR Y FECHA DE NACIMIENTO</td>
            <td colspan="3">
                <input type="date" name="fechanac" class="form-control" placeholder="Ingrese su fecha de nacimiento">
            </td>
        </tr>
        <tr>
            <td>EDAD</td>
            <td>
                <input type="text" name="edad" class="form-control" placeholder="Ingrese su edad">
            </td>
            <td>GENERO</td>
            <td><select name="genero" class="form-select">
                <option value="NULL"></option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select></td>
        </tr>
        <tr>
            <td>TIPO DE DOCUMENTO</td>
            <td>
                <select name="tipo_de_documento" class="form-select">
                    <option value="CC">Cedula de Ciudadania</option>
                    <option value="TI">Tarjeta de Identidad</option>
                </select>
            </td>
            <td>
                <input type="number" name="documento" class="form-control" placeholder="Ingrese su documento">
            </td>
            <td>
                <input type="text" name="lugarexpedicion" class="form-control" placeholder="Lugar de expedicion">
            </td>
        </tr>


        <tr>
            <td>ESTADO CIVIL</td>
                <td colspan="3">
                    <select name="estadocivil" class="form-select" placeholder="Ingrese su estado civil">
                        <option value="NULL"></option>
                        <option value="soltero/a">Soltero/a</option>
                        <option value="casado/a">Casado/a</option>
                        <option value="union_libre">Union Libre</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>DESPLAZADO</td>
                <td colspan="1">
                    <select name="desplazado1" class="form-select">
                        <option value="NULL"></option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
            <td colspan="1">DESVINCULADO</td>
                <td colspan="1">
                    <select name="desplazado2" class="form-select">
                        <option value="NULL"></option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>MADRE SOLTERA</td>
                <td colspan="3">
                    <select name="madresoltera" class="form-select">
                        <option value="NULL"></option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>TIENE HIJOS</td>
                <td colspan="">
                    <select name="hijos" class="form-select">
                        <option value="NULL"></option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
            <td>CUANTOS</td>
                <td colspan="">
                    <select name="cuantoshijos" class="form-select">
                        <option value="NULL"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3 o mas">3 o mas</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>DIRECCION</td>
                <td colspan="3">
                    <input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion">
                </td>
        </tr>
        <tr>
            <td>ESTRATO</td>
                <td colspan="3">
                    <input type="number" name="estrato" class="form-control" placeholder="Ingrese su estrato">
                </td>
        </tr>
        <tr>
            <td>TELEFONO FIJO</td>
                <td colspan="3">
                    <input type="number" name="fijo" class="form-control" placeholder="Ingrese su telefono fijo">
                </td>
        </tr>
        <tr>
            <td>CELULAR</td>
                <td colspan="3">
                    <input type="number" name="celular" class="form-control" placeholder="Ingrese su celular">
                </td>
        </tr>
        <tr>
            <td>E-MAIL</td>
                <td colspan="3">
                    <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electronico">
                </td>
        </tr>

        <table class="table table-striped table-bordered table-hover text-center">
            <tr>
                <th colspan="4" id="fondo_verde1">SALUD</th>
            </tr>
            <tr>
                <td rowspan="3">REGIMEN</td>
                <td colspan="3">
                    <select name="regimen" class="form-select">
                    <option value="NULL"></option>
                    <option value="contributivo">Contributivo</option>
                    <option value="eps">EPS</option>
                </select></td>
            </tr>
            <tr>
                <select name="cotizante" class="form-select">
                    <option value="NULL"></option>
                    <option value="cotizante"></option>
                    <option value="beneficiario"></option>
                </select>
                <td><label for="cotizante">Cotizante</label> 
                    <input type="text" name="cotizante" class="form-control" placeholder="Ingrese su cotizante">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="sisben">Sisben</label>
                    <select name="sisben" class="form-select">
                        <option value="NULL"></option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                </td>
                <td>
                    <label for="puntaje">Puntaje</label>
                    <input type="text" name="puntaje" class="form-control" placeholder="Ingrese su puntaje">
                </td>
            </tr>
            <tr>
                <td>GRUPO SANGUINEO</td>
                <td colspan="3"><input type="text" name="rh" class="form-control" placeholder="Ingrese su grupo sanguineo"></td>
            </tr>
            <tr>
                <td rowspan="2">EN CASO DE EMERGENCIA LLAMAR A:</td>
                <td colspan="3">
                    <input type="text" name="nombreemergencia" class="form-control" placeholder="Ingrese el nombre de la persona">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="number" name="telemergencia" class="form-control" placeholder="Ingrese telefono de emergencia">
                </td>
            </tr>
            <tr>
                <td>TIENE ALGUN TIPO DE ENFERMEDAD</td>
                <td><select name="enfermedad" class="form-select">
                    <option value="NULL"></option>
                    <option value="si">si</option>
                    <option value="no">no</option>
                </select></td>
                <td>
                <input type="text" name="cualenfermedad" class="form-control" placeholder="Diga cual"></td>
            </tr>
            <tr>
                <td>TIENE ALGUNA DISCAPACIDAD</td>
                <td><select name="discapacidad" class="form-select">
                    <option value="NULL"></option>
                    <option value="si">si</option>
                    <option value="no">no</option>
                </select></td>
                <td>
                <input type="text" name="cualdiscapacidad" class="form-control" placeholder="Diga cual"></td>
            </tr>
    </table>
    <input type="submit" value="Enviar" class="form-control btn btn-outline-success">
</article>
</form>
<h6 style="color:rgba(255, 255, 255, 0.600);">Copyright© 2022 Juan Pablo Morales</h6>
</body>
</html>