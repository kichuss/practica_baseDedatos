<?php 
require("conexion.php");
	$id = $_GET["id"];
	$query = "SELECT id FROM autores WHERE id='".$id."' ";
	$resultado = mysqli_query($link,$query) or die("Error: ".mysqli_error());
	if(mysqli_num_rows($resultado) > 0){	
		$query = "DELETE FROM autores WHERE id='".$id."' ";
		$resultado=mysqli_query($link,$query) or die("Error: ". mysqli_error());
		echo "EL autor ".$id." fue eliminado";
		echo "</br><a href='indice.php'>Indice</a>";
	}
	else{
		echo "no se pudo eliminar el autor: ".$id;
	}
	mysqli_close($link);
?>