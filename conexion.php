<?php  
   $host        = "localhost";
   $dbname      = "prueba";
   $usuario = "root" ;
   $contraseña = '';
   $db = mysqli_connect( $host,$usuario,'',$dbname) or die ("Error de conexion. ". mysql_error());
   ?>
