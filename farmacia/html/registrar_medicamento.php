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
                    

                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio </a>
                    </li>
                    <li class="active">
                        <a href="registrar_medicamento.php"><i class="fa fa-fw fa-user"></i> Registrar Medicamento </a>
                    </li>
                    <li>
                        <a href="ver_registros_medicamentos.php"><i class="fa fa-fw fa-user"></i> Ver Medicamentos</a>
                    </li>
                    <li>
                        <a href="Actualizar_medicamento.php"><i class="fa fa-fw fa-user"></i>Actualizar Medicamento</a>
                    </li>
                    <li>
                        <a href="eliminar_medicamento.php" ><i class="fa fa-fw fa-user"></i>Eliminar Medicamento</a>

                    </li>

                    <li>
                    <li>
                        <a href="pagar_medicamento.php"><i class="fa fa-fw fa-user"></i>Pagar Medicamento</a>


                     <li>
                        <a href="sucursales.php" ><i class="fa fa-fw fa-user"></i> </i>Sucursales</a>

                    </li>

                
                   
                   

                    <li>
                        <a href="recetas.php"><i class="fa fa-fw fa-pencil"></i>Recetas</a>
                    </li>

                     <li>
                        <a href="configuracion.php"><i class="fa fa-fw fa-gear"></i>Configuracion</a>
                    </li>
                    
                    <
                </ul>
            </div>
           
        </nav>
       <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class = "table table-striped table-hover">
                    <h1 style="text-align:center">Registrar Medicamento</h1>
                            <tr>
                                <td>Nombre del Medicamento</td>
                                <td>
                                    <input type="text" name="txt-nombre" id="txt-nombre" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Codigo de Producto</td>
                                <td>
                                    <input type="text" name="txt-codigo" id="txt-codigo" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de Elaboracion</td>
                                <td>
                                    <input type="text" name="txt-fechaElaboracion" id="txt-fechaElaboracion" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de Vencimiento</td>
                                <td>
                                    <input type="text" name="txt-fechaVencimiento" id="txt-fechaVencimiento" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Cantidad</td>
                                <td>
                                    <input type="text" name="txt-cantidad"  id="txt-cantidad" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Descripcion</td>
                                <td><textarea rows="5" cols="35" class="form-control" id="txt-descripcion" name="txt-descripcion"></textarea></td>
                            </tr>
                            <tr>
                                <td><div id ="div-respuesta" class="well"></div></td>
                            </tr>
        				
        				    <tr>
                                <td colspan="2">
                                    <button name="btn-guardar" id="btn-guardar" class="btn btn-primary">Guardar</button> <button name="btn-cancelar" id="btn-cancelar" class="btn btn-primary">Cancelar</button>
                                </td>
                            </tr>                    
                </table>
            </div>
        
     
            </div>
        </div>
    </div>
    

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
 
    <script>
        $(document).ready(function(){
            //alert("Estamos ready, el DOM fue cargado");
            $("#btn-guardar").click(function(){
                var parametros = "txt-nombre="+$("#txt-nombre").val()+"&"+"txt-codigo="+$("#txt-codigo").val()+"&"+"txt-cantidad="+$("#txt-cantidad").val()+"&"+"txt-descripcion="+$("#txt-descripcion").val()+"&"+"txt-fechaElaboracion="+$("#txt-fechaElaboracion").val()+"&"+"txt-fechaVencimiento="+$("#txt-fechaVencimiento").val(); //formato similar a cuando se envia la informacion por GET


                $.ajax({
                    url:"../ajax/procesar.php",
                    method:"POST",
                    data: parametros,
                    success:function(respuesta){
                        //$("#img-loading").fadeOut(200);
                        //$("#btn-ingresar").button("reset");
                        //$("#div-respuesta").html(respuesta);
                        if(respuesta=="Y")
                            {
                                alert("Debe llenar todos los campos");

                                if($("#txt-nombre").val()==""){
                                    $("#txt-nombre").css("background-color","F78181");
                                }else {
                                    $("#txt-nombre").css("background-color","fff");
                                }
                                if($("#txt-codigo").val()==""){
                                    $("#txt-codigo").css("background-color","F78181");
                                }else {
                                    $("#txt-codigo").css("background-color","fff");
                                }
                                if($("#txt-cantidad").val()==""){
                                    $("#txt-cantidad").css("background-color","F78181");
                                }else {
                                    $("#txt-cantidad").css("background-color","fff");
                                }
                                if($("#txt-descripcion").val()==""){
                                    $("#txt-descripcion").css("background-color","F78181");
                                }else {
                                    $("#txt-descripcion").css("background-color","fff");
                                }
                                if($("#txt-fechaElaboracion").val()==""){
                                    $("#txt-fechaElaboracion").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaElaboracion").css("background-color","fff");
                                }
                                if($("#txt-fechaVencimiento").val()==""){
                                    $("#txt-fechaVencimiento").css("background-color","F78181");
                                }else {
                                    $("#txt-fechaVencimiento").css("background-color","fff");
                                }


                        }else {
                            alert("Campos llenos");
                            $("#txt-nombre").css("background-color","fff");
                            $("#txt-codigo").css("background-color","fff");
                            $("#txt-cantidad").css("background-color","fff");
                            $("#txt-descripcion").css("background-color","fff");
                            }
                                           },
                    error:function(){
                        alert("Ocurrio un error.");
                    }
                }); 
            }); 

        });
    </script>

</body>

</html>