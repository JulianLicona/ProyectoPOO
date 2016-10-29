<?php 
	

	$nombre = $_POST["txt-nombre"];
	$codigo = $_POST["txt-codigo"];
	$cantidad = $_POST["txt-cantidad"];
	$descripcion = $_POST["txt-descripcion"];


	if (strlen($nombre)==0||strlen($codigo)==0||strlen($cantidad)==0||strlen($descripcion)==0) {
		echo "Y";
		}
	else{
		echo "N";
		}


 ?>