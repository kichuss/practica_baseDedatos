<?php 
require("conexion.php");
session_start($link);
	$id=$_GET["id"];
	$query= "SELECT * FROM autores WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());
	if (mysqli_num_rows($resultado) > 0){
		while ($row=mysqli_fetch_array($resultado)) {
?>
		<html>
			<body>
				<font size="5">autores</font></br>
				<label><?php echo "id: ".$row['id']; ?></label></br>
				<label><?php echo "autor: ".$row['autor']; ?></label></br>
				<label><?php echo "titulos: ".$row['titulos'] ?></label></br>
				<label><?php echo "fecha: ".$row['fecha'] ?></label></br>
				<label><?php echo "contenido: ".$row['contenido']; ?></label></br>
				<a href="indice.php">Indice</a>	
				
			</body>	
		</html>
<?php 
		}
	}
	mysqli_close($link);
?>