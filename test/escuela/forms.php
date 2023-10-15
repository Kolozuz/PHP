<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body >
    <form action="insertar_sql.php" method="POST">
        <div class="container">
            <table class="table table-bordered" style="width: 100% ;">
                <tr>
                    <th rowspan="3" style="width: 20%;"><img src="https://escuelataller.org/wp-content/uploads/2020/12/Logo_FETB_final-05-GMAIL.png" alt=""></th>
                    <th rowspan="2" style="width: 50%;">FORMATO DE INSCRIPCIÓN <br> FORMACIÓN TECNICO LABORAL</th>
                    <th>versión:  01</th>
                </tr>
                <tr>
                    <th>Fecha: 10/20/16</th>
                </tr>
                <tr>
                    <th>Proceso de formación</th>
                    <th >Pagina: 1 de 2</th>
                </tr>
            </table> 
            <div class="row">
                <div class="col-md-10">
                    
                    <label for="">NOMBRE DEL CURSO AL QUE ASPIRA:</label>
                    <input type="text" class="form-control" name="nombre_curso_aspira">
                    <br>
                    <label for="">FECHA DE DILIGENCIAMIENTO:</label>
                    <input type="date"  class="form-control" name="fecha_diligenciamiento">
                </div>
            </div>

            <br>

            <table class="table table-bordered">
                <div class="row">
                    <tr>
                        <th colspan="4">         
                            <div class="col-md-12 align-center" style="text-align:center;">
                                <br><h3 id="datosper">DATOS PERSONALES</h3>           
                            </div>
                        </th> 
                    </tr>

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">APELLIDOS</label>
                                <input type="text" class="form-control" name="apellido">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4">
                            <div class="col-md-12">
                                <label for="">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre">   
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">LUGAR Y FECHA DE NACIMIENTO</label>
                                <input type="text" class="form-control" name="lugar_nacimiento">   
                            </div>
                        </th>

                        <th colspan="2">
                            <div class="col-md-12">
                                <label for=""> </label>
                                <input type="date" class="form-control" name="fecha_nacimiento">   
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">EDAD</label>
                                <input type="number" class="form-control" name="edad">   
                            </div>
                        </th>
                        
                        <th colspan="2"> 
                            <div class="col-md-12">
                                <label for="">GÉNERO</label>
                                <input type="text" class="form-control" name="genero">   
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">TIPO DE DOCUMENTO</label>
                                <select name="tipo_documento" id="" class="form-control">
                                    <option value="cedula">Cedula</option>
                                    <option value="tarjeta_identidad">Tarjera de identidad</option>
                                </select>
                            </div>
                        </th>

                        <th>
                            <div class="col-md-12">
                                <label for="">Numero de documento</label>
                                <input type="number" class="form-control" name="numero_documento">   
                            </div>
                        </th>

                        <th>
                            <div class="col-md-12">
                                <label for="">Lugar de Expedición</label>
                                <input type="text" class="form-control" name="lugar_expedicion">   
                            </div>
                        </th>
                    </tr>

                </div>
            </table>
            
            <br>

            <table class="table table-bordered">
                <div class="row">
                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">ESTADO CIVIL</label>
                                <input type="text" class="form-control" name="estado_civil">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">DESPLAZADO</label>
                                <select name="desplazado" id="" class="form-control">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                        </th>

                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">DESVINCULADO</label>
                                <select name="desvinculado" id="" class="form-control">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4">
                            <div class="col-md-12">
                                <label for="">MADRE SOLTERA</label>
                                <select name="madre_soltera" id="" class="form-control">
                                    <option value="N/A">N/A</option>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>   
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">TIENE HIJOS</label>
                                <select name="tiene_hijos" id="" class="form-control">
                                    <option value="N/A">N/A</option>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                        </th>

                        <th colspan="2">
                            <div class="col-md-12"> 
                                <label for="">CUANTOS</label>
                                <input type="number" class="form-control" name="cuantos_hijos" id="">
                            </div>
                        </div>
                        </th>
                    </tr>    

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">DIRECCIÓN</label>
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">ESTRATO</label>
                                <input type="number" class="form-control" name="estrato">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">TELEFONO FIJO</label>
                                <input type="number" class="form-control" name="telefono_fijo">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">CELULAR</label>
                                <input type="number" class="form-control" name="celular">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4"> 
                            <div class="col-md-12">    
                                <label for="">E-MAIL</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </th>
                    </tr>
                </div>
            </table> 

            <br>

            <table class="table table-bordered" style="width:100% ;">
                <div class="row">
                    <tr>
                        <th colspan="4">         
                            <div class="col-md-12 align-center" style="text-align:center;">
                                <br><h3 id="datosper">SALUD</h3>           
                            </div>
                        </th> 
                    </tr>

                    <tr>
                        <th rowspan="4" style="width: 20%"> 
                            <div class="col-md-12">    
                                <label for="" >REGIMEN</label>
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th> 
                            <div class="col-md-12">    
                                <label for="">CONTRIBUTIVO</label>
                                <select name="contributivo" id="" class="form-control">
                                    <option value=" "> </option>
                                    <option value="X">X</option>
                                </select>
                            </div>
                        </th>

                        <th colspan=""> 
                            <div class="col-md-12">    
                                <label for="">EPS</label>
                                <input type="text" class="form-control" name="eps">
                            </div>
                        </th>

                    </tr>

                    <tr>
                        <th colspan=""> 
                            <div class="col-md-12">    
                                <label for="">Cotizante</label>
                                <select name="cotizante" id="" class="form-control">
                                    <option value=" "> </option>
                                    <option value="X">X</option>
                                </select>
                            </div>
                        </th>

                        <th colspan=""> 
                            <div class="col-md-12">    
                                <label for="">Beneficiario:</label>
                                <select name="beneficiario" id="" class="form-control">
                                    <option value=" "> </option>
                                    <option value="X">X</option>
                                </select>
                            </div>
                        </th>
                        
                    </tr>

                    <tr>
                        <th colspan=""> 
                            <div class="col-md-12">    
                                <label for="">Subsidiado (SISBEN)</label>
                                <select name="subsidiado_sisben" id="" class="form-control">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                         </th>

                        <th>
                            <div class="col-md-12">
                                <label for="">Puntaje</label>
                                <input type="text" class="form-control" name="puntaje_sisben">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="4">
                            <div class="col-md-12">
                                <label for="">GRUPO SANGUINEO Y FACTOR RH</label>
                                <input type="text" class="form-control" name="gp_sangre_rh">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th rowspan="2">
                            <div class="col-md-12">
                                <label for="">EN CASO DE EMERGENCIA LLAMAR A:</label>
                            </div>
                        </th>

                        <th colspan="3">
                            <div class="col-md-12">
                                <label for="">Nombre: </label>
                                <input type="text" class="form-control" name="emergencia_nombre">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="3">
                            <div class="col-md-12">
                                <label for="">Teléfono de contacto:</label>
                                <input type="number" class="form-control" name="emergencia_telefono">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2"> 
                            <div class="col-md-12">    
                                <label for="">TIENE ALGÚN TIPO DE ENFERMEDAD</label>
                                <select name="tiene_enfermedad" id="" class="form-control">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                         </th>

                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">CUAL:</label>
                                <input type="text" class="form-control" name="que_enfermedad">
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2"> 
                            <div class="col-md-12">    
                                <label for="">PRESENTA ALÚN TIPO DE DISCAPACIDAD</label>
                                <select name="tiene_discapacidad" id="" class="form-control">
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                         </th>

                        <th colspan="2">
                            <div class="col-md-12">
                                <label for="">CUAL:</label>
                                <input type="text" class="form-control" name="que_discapacidad">
                            </div>
                        </th>
                    </tr>
                </div>
            </table>
            <button type="submit" class="btn btn-primary">ENVIAR</button>

            <br><br><br><br><br><br>
            
        </div>
    </form>
</body>
</html>