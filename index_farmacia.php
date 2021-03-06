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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
  <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    

                    <li class="active">
                        <a href="index_farmacia.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li>
                        <a href="html/farmacia/registrar_medicamento.php"><i class="fa fa-fw fa-user"></i> Registrar Medicamento </a>
                    </li>
                    <li>
                        <a href="html/farmacia/ver_registros_medicamentos.php"><i class="fa fa-fw fa-user"></i> Ver Medicamentos</a>
                    </li>
                    <li>
                        <a href="html/farmacia/Actualizar_medicamento.php"><i class="fa fa-fw fa-user"></i>Actualizar Medicamento</a>
                    </li>
                    <li>
                        <a href="html/farmacia/eliminar_medicamento.php" ><i class="fa fa-fw fa-user"></i>Eliminar Medicamento</a>
                    
                    </li>

                    <li>
                    <li>
                        <a href="html/farmacia/pagar_medicamento.php"><i class="fa fa-fw fa-user"></i>Pagar Medicamento</a>

                     <li>
                        <a href="html/farmacia/sucursales.php" ><i class="fa fa-fw fa-user"></i> </i>Sucursales</a>
                       
                    </li>
                    <li>
                        <a href="html/farmacia/recetas.php"><i class="fa fa-fw fa-pencil"></i>Recetas</a>
                    </li>

                    
                    
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
                            <h1>Porque tu salud nos importa</h1>
                            <p></p>

                            <img src="img/farmacia.jpg" class="img-responsive">
                        </div >
                        <div class="jumbotron text-center alert alert-info" role="alert">
                            <h1></h1>
                            <p>Contamos con la mas grande cadena de farmacias de tu comunidad</p> 
                            <img src="img/farmacia3.jpg" class="img-responsive">
                            <h5 style="text-align:left">Tegucigalpa
                                Oficinas Pricipales: Edificio Farinter, atras de la Toyota, Barrio la Granja, Teléfono:
                            </h5>
 
                            <h5 style="text-align:left">
                            San Pedro Sula
                            Oficinas Principales: Barrio Santa Rosa, segundo anillo periférico 7 y  8 calle S.E. media cuadra al sur de la iglesia Luz del Mundo,
                            </h5>
 
                            <h5>Todos los Derechos Reservados  Farmacias El Milagro  ©   2016</h5>
                        </div>
                    </div>
                </div>
                

        <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    

</body>

</html>
