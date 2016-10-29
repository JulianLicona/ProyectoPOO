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
                <a class="navbar-brand" href="index.html">Menu</a>
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
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>  
                         <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
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
                        <a href="../index.html"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="doctores.html"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#enfermeros"><i class="fa fa-fw fa-user"></i> Enfermeria <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="enfermeros" class="collapse">
                            <li>
                                <a href="expediente.php">Crear Expediente</a>
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
                        <a href="cuentas_usuarios.html"><i class="fa fa-fw fa-edit"></i> Cuentas</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-plus"></i> Farmacia<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Medicamentos</a>
                            </li>
                            <li>
                                <a href="#">Sucursales</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="asistencia_medica.html"><i class="fa fa-fw fa-pencil"></i> Asistencias Medicas</a>
                    </li>

                     <li>
                        <a href="configuracion.html"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                    
                    <
                </ul>
            </div>
           
        </nav>
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                <h1 class="page-header ">
                        <div class="label label-primary text-center" style="color:#000000; font-family:Edwardian Script ITC; font-size:40px">
                            <strong>Clinica "El Milagro"</strong>
                        </div>
                           
                        </h1>
                    <div class="col-lg-9 text-center">
                        <h1 class="page-header">
                           Expediente 
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-9">


                            <table class="table table-striped table-hover">
                            <tr>
                        <td>
                             <input type="text" name="busqueda" id="busqueda"  placeholder="Numero de Expediente" autocomplete=”on”  class="form-control">
                        </td>
                        <td>
                           
                           <input id="submit" value="Buscar" type="submit" class="btn btn-warning " >
                
                        </td>
                    </tr>
                                <tr>Informacion Personal</tr>
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
                                <td>Apellido: </td>
                                <td>
                                     <input type="text" name="apellido" id="txt-apellido" class="form-control" placeholder="Apellidos"> 
                                </td>
                                </tr>
                                
                                

                                </td>
                                </tr>
                                <tr>
                                <td>ID: </td>
                                <td>
                                
                                <input type="text" name="identidad" id="txt-identidad" class="form-control" placeholder="Numero de Identidad del Paciente">
                                </td>
                                </tr>

                            
                                <tr>
                                <td>Fecha-Nacimiento: </td>
                                <td>
                                
                                    <input type="text" name="fecha-nacimiento" id="txt-fecha-nacimiento" class="form-control" placeholder="Fecha Nacimiento">
                                
                                </td>
                                </tr>

                                <tr>
                                <td>Direccion: </td>
                                <td>
                                
                                <input type="text" class="form-control" name="direccion" id="txt-direccion" placeholder="Direccion">
                                 </td>
                                </tr>
                                <tr>
                                <td>Telefono: </td>
                                <td>
                                <input type="text" class="form-control" name="telefono" id="txt-telefono" placeholder="N° Telefono">
                          </td>
                                </tr>

                            <tr>
                               <td>Estado</td>
                                <td>
                                    <select name="slc-estado" id="slc-estado" class="form-control">
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Union libre">Union Libre</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="viudo">Viudo</option>
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                <td>edad: </td>
                                <td>
                                
                                <input type="text" class="form-control" name="edad" id="txt-edad" placeholder="Edad">
                                 </td>
                                </tr>

                           <tr>
                                <td>Agregar un documento: </td>
                                <td>
                                
                                <input type="file">
                             
                                
                            

                            <tr>
                                <td colspan="2">
                                    <button name="btn-guardar" id="btn-guardar" class="btn btn-primary">Guardar</button> <button name="btn-cancelar" id="btn-modificar" class="btn btn-primary">Modificar</button>
                                </td>
                            </tr>
                            

                        </table>

                    </div>
                    
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/validarenfermeros.js"></script>
    
</body>

</html>
