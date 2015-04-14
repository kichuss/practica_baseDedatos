<?php 
require("conexion.php"); 
session_start();	
	$id=$_GET["id"];
	$query= "SELECT * FROM autores WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());
	if (mysqli_num_rows($resultado) > 0){
		while ($row=mysqli_fetch_array($resultado)) {
?>
			<html>
				<head><title>Modificar</title></head>
				<body>
					<form method="POST" action="modificar.php">
						<fieldset>
								
<legent align="center"><font size="5">Modificar autor</font></legent></br></br><input type="text" name="id" value="<?php echo $row["id"];  ?>"readonly="true">
								
</br><label for="autor"><font color="blue">Nombre del autor</font></label></br>
							  	
<input type="text" name="autor" id="autor" value="<?php echo $row["autor"]; ?>"></br>

<label for="titulo"><font color="blue">titulo</font></label></br>
<input type="text" name="titulo" id="titulo" value="<?php echo $row["titulo"]; ?>"></br>


<label for="fecha"><font color="blue">fecha</font></label></br>

<input type="date" name="fecha" id="fecha" value="<?php echo $row["fecha"]; ?>"></br>

<label for="contenido"><font color="blue">contenido</font></label></br>


<textarea  name="contenido" id="contenido" row="100" cols="50"><?php echo $row["contenido"]; ?></textarea></br>
								
								</br>
								<input type="submit"  nombre="submit" value="Guardar cambios">
							</fieldset>
					</from>
				</body>	
			</html>
<?php 
		}
	}
	mysqli_close($link);
?>