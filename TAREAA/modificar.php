<?php 
require("conexion.php"); 
session_start();	
	$id=$_POST["id"];
	$query= "SELECT * FROM autores WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());
	if (mysqli_num_rows($resultado) > 0){
		
		$query ="UPDATE autores SET autor='".$_POST["autor"]."', titulo='".$_POST["titulo"]."',fecha='".$_POST["fecha"]."', contenido='".$_POST["contenido"]."' WHERE id='".$_POST["id"]."' "; 
		$resultado=mysqli_query($link,$query) or die("Error". mysqli_error());
		echo "Se modifico el registro ".$id." con exito</br>";
		 
		echo "</br>"."autor: ".$_POST["autor"].
		     "</br>"."titulo: ".$_POST["titulo"].
		     "</br>"."contenido: ".$_POST["contenido"].
		     "</br>"."fecha".$_POST["fecha"];
		 echo "</br><a href='indice.php'>Indice</a>"; 
	}
	else {
		echo "No se logro realizar los cambios";
	}
	mysqli_close($link);
?>