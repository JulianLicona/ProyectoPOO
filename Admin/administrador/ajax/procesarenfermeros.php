<?php 
switch ($_GET["accion"]) {
	case 'guardar':
		sleep(10);
		echo "esta es la imformacion que se recibe de enfermeros.php: <br>";
		echo "numero-expediente:".$_POST["txt-numero-expediente"]."<br>";
		echo "nombre:".$_POST["txt-nombre"]."<br>";

		echo "edad:".$_POST["txt-edad"]."<br>";
		echo "peso:".$_POST["txt-peso"]."<br>";
		echo "altura:".$_POST["txt-altura"]."<br>";
		echo "temperatura:".$_POST["txt-temperatura"]."<br>";
		echo "presion-arterial:".$_POST["txt-presion-arterial"]."<br>";
		
		
		break;
	
	default:
		# code...
		break;
}
 ?>