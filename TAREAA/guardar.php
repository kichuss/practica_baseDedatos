<?php 
require("conexion.php"); 
	
	$autor=$_POST["autor"];
	$titulo=$_POST["titulo"];
	$contenido=$_POST["contenido"];
	$fecha=$_POST["fecha"];
	echo "<p>El autor que se guardo es el siguiente:</p>";
	echo "autor: ". $autor;
	echo "</br> titulo: ". $titulo;
	echo "</br> fecha: ". $fecha; 
	echo "</br> contenido: ". $contenido; echo "</br>";
	
	$insertar = mysqli_query($link, "INSERT INTO autores(autor,titulo,fecha,contenido) VALUES ('$autor','$titulo','$fecha','$contenido')");
	if(!$insertar){
		echo "</br>Error al guardar los datos!!";
	} 
	else{
		echo "</br>Los datos fueron guardados con exito!!";
	}
	mysqli_close($link);
	echo "</br><a href='indice.php'>Regresar a indice</a>";
	echo "</br><a href='Cerrar.php'>Cerrar sesi&acuten</a>"
?> 