<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	</style>
</head>
<body>

<?php


	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";


	$resultados=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);

?>

	


</body>
</html>