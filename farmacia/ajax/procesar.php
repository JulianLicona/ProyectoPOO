<?php 
	

	$nombre = $_POST["txt-nombre"];
	$codigo = $_POST["txt-codigo"];
	$cantidad = $_POST["txt-cantidad"];
	$descripcion = $_POST["txt-descripcion"];
	$fechaElaboracion = $_POST["txt-fechaElaboracion"];
	$fechaVencimiento= $_POST["txt-fechaVencimiento"];


	if (strlen($nombre)==0||strlen($codigo)==0||strlen($cantidad)==0||strlen($descripcion)==0||strlen($fechaVencimiento)==0||strlen($fechaElaboracion)==0) {
		echo "Y";
		}
	else{
		echo "N";
		}


 ?>