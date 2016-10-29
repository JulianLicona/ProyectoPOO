<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica "El Milagro"</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">  
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                            <a href="html/perfil.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes </a>
                        </li>  
                         <li>
                            <a href="html/configuracion.php"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>

                    <li>
                        <a href="html/doctores.php"><i class="fa fa-fw fa-user"></i> Doctores</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#enfermeros"><i class="fa fa-fw fa-user"></i> Enfermeria <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="enfermeros" class="collapse">
                            <li>
                                <a href="html/expediente.php">Crear Expediente</a>
                            </li>
                            <li>
                                <a href="html/ver_expediente.php">Ver Expediente</a>
                            </li>
                            <li>
                                <a href="html/enfermeros.php">Pre-clinica</a>
                            </li>
                            <li>
                                <a href="html/citas.php">Gestion de Citas</a>
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
                                <a href="html/crear_cuentas_usuarios.php">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="html/actualizar_cuentas_usuario.php">Actualizar Cuenta</a>
                            </li>
                            <li>
                                <a href="html/eliminar_cuentas_usuario.php">Eliminar cuenta</a>
                            </li>
                            
                        </ul>
                    </li>

                
                   
                   

                    <li>
                        <a href="html/asistencia_medica.php"><i class="fa fa-fw fa-pencil"></i> Asistencias Medicas</a>
                    </li>

                     <li>
                        <a href="html/configuracion.php"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                    
                    <
                </ul>
            </div>
           
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page principal -->
                <div class="row ">
                    <div class="col-lg-12 ">

                        <h1 class="page-header  text-center">
                        <div class="label label-primary text-center" style="color:#000000; font-family:Edwardian Script ITC; font-size:40px">
                            <strong>Clinica "El Milagro"</strong>
                        </div>
                           
                        </h1>
                        <ol class="breadcrumb alert alert-info" role="alert">
                            <li class="active text-left " style="font-size:20px">
                                <i class="fa fa-dashboard  text-left" style="font-size:20px"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
            
                <div class="col-lg-12 container-fluid ">
                    <div class="row">
                        
                        <div class="jumbotron text-center alert alert-info" role="alert">
                            <h1>Bienvenido</h1>
                            <p>La clinica a sido creada para ayudar a las personas que necesitan asistencias medicas.</p>

                            <img src="img/clinica.jpg" class="img-responsive">
                        </div >
                        <div class="jumbotron text-center alert alert-info" role="alert">
                            <h1></h1>
                            <p>Contamos con personal altamente calificado para cada unas de las areas de trabajo</p> 
                            <img src="img/doctores.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                

                
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="js/validarenfermeros.js"></script>
    <script type="text/javascript">
        $("#btn-accion").click(function(evento){
            evento.preventDefault();
            alert("Accion");
        });
    </script>

</body>

</html>

