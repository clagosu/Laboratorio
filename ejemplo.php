<?php 
include 'conexion.php'; 
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$consulta = "SELECT * FROM alumnos";
$resultado = $db->query( $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	echo "<div>";
	echo "<table class='table'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Codigo</th>";
	echo "<th>Nombre</th>";
	echo "<th>Edad</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td class='table-active'> $columna[Codigo] </td>";
		echo "<td> $columna[Nombre] </td>";
		echo "<td> $columna[Edad] </td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla
	echo "</div>";

 ?>
</body>
 </html>