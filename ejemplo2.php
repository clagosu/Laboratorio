<!DOCTYPE html>
<html>
<head>
	<?php include "conexion.php" ?>
	<title>Consulta 1</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<style type="text/css">

		.tabla{
			text-align: center;

		}

		table, td, th {
 		   	border: 1px solid black;
           }

		table {
    		border-collapse: collapse;
    		width: 100%;
    		margin: 0px auto;  
			}

		th {
    		height: 50px;
           }
		a:link, a:visited {
    		background-color: #f44336;
    		color: white;
    		padding: 14px 25px;
    		text-align: center;
    		text-decoration: none;
    		display: inline-block;
	    }


	</style>
</head>
<div><p><strong>Enunciado:</strong> Muestre el rut y nombre del cliente, codigo y color de la mascota para aquellos clientes que han comprado mascotas de tipo domesticas y de raza labrador, pero no de raza chihuahua (nunca lo han hecho).</p></div>
	<div class="tabla">
	<h2>Datos de tabla alumnos </h2>
	<table borde='2'> <!--Creacion tabla -->
	<tr>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Edad</th>
	</tr>
	
	<?php
	$consulta = "SELECT * FROM alumnos"; //consulta SQL
	$resultado = $db->query( $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos"); //Ejecucion consulta SQL
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td> $columna[Codigo] </td>";
		echo "<td> $columna[Nombre] </td>";
		echo "<td> $columna[Edad] </td>";
		echo "</tr>";
	}
?>	
 </table>
</div>
<div class="link">
<a href="index.html">Inicio</a>
</div>


</html>