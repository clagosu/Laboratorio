<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Alumno</title>
	<?php include "conexion.php" ?>
	<meta charset="utf-8">
</head>
<body>
<?php 
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$consulta = "INSERT INTO ALUMNOS (codigo,nombre,edad) VALUES ('$codigo','$nombre','$edad')";
echo "La consulta es " . $consulta;
$resultado = $db->query( $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos"); //Ejecucion consulta SQL
 ?>
 <br>
 <a href="ejemplo2.php">Ver alumnos</a>
</body>
</html>