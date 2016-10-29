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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> Paciente <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                        <li>
                                <a href="expediente.html">Expediente</a>
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
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Gestion de Citas</h3>
                            <p>Citas con los especialistas son las siguientes .</p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ESPECIALISTA</th>
                                            <th>
                                               Doctor
                                                
                                            </th>
                                            <th>
                                                Centro
                                                
                                            </th>
                                            <th>
                                                Proxima Cita
                                                
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Cardiologia</th>
                                            <td>Ramiro Martinez</td>
                                            <td> Clinica El Milagro</td>
                                            <td>12/11/2016</td>
                                        </tr>
                                        <tr>
                                            <th>Reumatologia</th>
                                            <td>Gonzales</td>
                                            <td>El Milagro</td>
                                            <td>12/12/2016</td>
                                           
                                        </tr>
                                        <tr>
                                            <th>Oftalmologia</th>
                                            <td>
                                                Perez
                                            </td>
                                            <td>
                                               El Milagro
                                            </td>
                                            <td>
                                                12/12/2016  9:00 AM
                                            </td>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <th>Psicologia</th>
                                            <td>Francisco Coello</td>
                                            <td>Clinica El Milagro</td>
                                            <td>16/11/2016 2:00 PM</td>
                                           
                                        </tr>
                                        <tr>
                                            <th>Ginecologia</th>
                                            <td> Lopez</td>
                                            <td> El Milagro</td>
                                            <td>02/02/2017 7:00 AM</td>
                                        </tr>
                                        <tr>
                                            <th>Odontologia</th>
                                            <td> Garcia</td>
                                            <td> El Milagro</td>
                                            <td>02/02/2017 10:00 AM</td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                            <p> Las citas con los especialistas tienen que estar puntuales y con un acompañante por cualquier cosa que pueda surgir.</p>
                        </div>
                       
                        <button id= "btn-Modificar" class="btn btn-primary">Modificar</button>
                         <button id= "btn-Actualizar" class="btn btn-danger">Actualizar</button>


                    </div>
                </div>
</div>
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>