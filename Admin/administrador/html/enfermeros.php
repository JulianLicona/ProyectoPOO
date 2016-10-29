<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>
<div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Menu</a>
            </div>
            <ul class="nav navbar-right top-nav">

            <!--Mensaje y el icono -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">

                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Usuario</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>Lunes 15/septiembre72016 </p>
                                        <p>Este es un mensaje</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="message-footer">
                            <a href="#">Leer todos los mensajes nuevos</a>
                        </li>
                    </ul>
                </li>
                <!-- Termina los mensaje-->

                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="perfil.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>  
                         <li>
                            <a href="configuracion.php"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-question"></i>Ayuda </a>
                         </li> 
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    

                    <li class="active">
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="doctores.php"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#enfermeros"><i class="fa fa-fw fa-user"></i> Enfermeria <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="enfermeros" class="collapse">
                            <li>
                                <a href="expediente.php">Ver Expediente</a>
                            </li>
                            <li>
                                <a href="ver_expediente.php">Ver Expediente</a>
                            </li>
                            <li>
                                <a href="enfermeros.php">Pre-clinica</a>
                            </li>
                            <li>
                                <a href="citas.php">Gestion de Citas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#paciente"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="paciente" class="collapse">
                        <li>
                                <a href="#">Expediente</a>
                            </li>
                            <li>
                                <a href="#">Historial Medico</a>
                            </li>
                            <li>
                                <a href="#">Tratamientos</a>
                            </li>
                            <li>
                                <a href="#">Citas</a>
                            </li>
                            <li>
                                <a href="#">Recetas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#farmacia"><i class="fa fa-fw fa-user"></i> Farmacia <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="farmacia" class="collapse">
                            <li>
                                <a href="#">Sucursales</a>
                            </li>
                            <li>
                                <a href="#">Medicamentos</a>
                            </li>
                            
                        </ul>
                    </li>

                    

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cuentas"><i class="fa fa-fw fa-user"></i> Cuentas Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cuentas" class="collapse">
                            <li>
                                <a href="crear_cuentas_usuarios.php">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="actualizar_cuentas_usuario.php">Actualizar Cuenta</a>
                            </li>
                            <li>
                                <a href="eliminar_cuentas_usuario.php">Eliminar cuenta</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                   
                    <li>
                        <a href="asistencia_medica.php"><i class="fa fa-fw fa-pencil"></i> Asistencias Medicas</a>
                    </li>

                     <li>
                        <a href="configuracion.php"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                    
                    <
                </ul>
            </div>
           
        </nav>

<div id="page-wrapper">
<style type="text/css">
        *{
            margin:0px;
            padding:0px;
        }
        body{
            background: url(fondo_art.jpg) #2b2b2a;
            background-position:center;
             

        }
        </style>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                           Registro de Enfermeria
                        </h1>

                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                            <table class="table table-striped table-hover">
                            <tr><h1>Pre-Clinica</h1></tr>
                                <tr>
                                <td>Numero de Expediente:</td>
                                <td>
                                <input type=" text" name="N°" id="txt-numero-expediente" class="form-control" >
                                <p class="help-block">Numero de expediente</p>
                                
                                </td>
                                </tr>
                          
                                <tr>
                                <td>Nombre: </td>
                                <td>
                                    <input type="text" name="Nombre" id="txt-nombre" class="form-control" placeholder="Nombre del paciente">
                                
                                </td>
                                </tr>
                                <tr>
                                <td>Edad: </td>
                                <td>
                                     <input type="text" name="Edad" id="txt-edad" class="form-control" placeholder="Edad del Paciente"> 
                                </td>
                                </tr>
                                
                                

                                </td>
                                </tr>
                                <tr>
                                <td>Peso: </td>
                                <td>
                                
                                <input type="text" name="" id="txt-peso" class="form-control" placeholder="Peso del Paciente">
                                </td>
                                </tr>

                            
                                <tr>
                                <td>Altura: </td>
                                <td>
                                
                                    <input type="text" name="" id="txt-altura" class="form-control" placeholder="Atura del Paciente">
                                
                                </td>
                                </tr>

                                <tr>
                                <td>Temperatura: </td>
                                <td>
                                
                                <input type="text" name="temperatura" id="txt-temperatura" class="form-control" placeholder="Temperatura en °C">
                                 </td>
                                </tr>
                                <tr>
                                <td>Presion Arterial: </td>
                                <td>
                             
                               
                                <input type="text" name="presion-arterial" id="txt-presion-arterial" class="form-control" placeholder="Presion">
                          </td>
                                </tr>

                            <tr>
                                <td>Correo Enfermeria: </td>
                                <td>
                                
                                <p class="form-control-static">enfermeria@gmail.com</p>
                           </td>
                                </tr>

                           <tr>
                                <td>Agregar un documento: </td>
                                <td>
                                
                                <input type="file">
                             
                                
                            <tr>
                            <td colspan="2">     
                            <button id= "btn-Actualizar" class="btn btn-danger">Actualizar</button>
                            <button id= "btn-Modificar" class="btn btn-primary">Modificar</button>
                            
                            </td>
                            </tr>
                            

                        </table>

                    </div>


                    
                <!-- /.col-lg-12 -->
            </div>
                    
                   
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        $("#btn.Actualizar").click(function(){
        $("#btn-Actualizar").button("loading");
        $("#img-loading").fadeIn(100);

        var parametros="txt-numero-expediente="+$("#txt-numero-expediente").val()+"&"+"txt-nombre="+$("#txt-nombre").val()+"&"+"txt-edad="+$("#txt-edad").val()+"&"+"txt-peso"+$("#txt-peso").val()+"&"+"txt-altura="+$("#txt-altura").val()+"&"+"txt-temperatura="+$("#txt-temperatura").val()+"&"+"txt-presion-arterial"+$("txt-presion-arterial").val();

                alert("Informacion que se enviara" + parametros);
                $.ajax({
                    url:"ajax/procesar.php?accion=guardar",
                    method:"POST",
                    data:parametros,
                    succes:function(respuesta){
                        $("#img-loading").fadeOut(100);
                        $("#btn-Actualizar").button("reset");
                        $("#div-respuesta").html(respuesta);


                    },
                    error:function(){
                        alert("ocurrio un error.")
                    }
                });



    });
        

    </script>

</body>

</html>
