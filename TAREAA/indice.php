<html>
<head><title>Indice</title></head>
<body>
<?php
require("conexion.php");
session_start();
	$resultado= mysqli_query($link, "SELECT * FROM autores");
	echo "<fieldset><legent><font size='5' color='blue'>autores</font></legent>";
	
		if (mysqli_num_rows($resultado) > 0){	
		echo "<table border='1'>
				<tr>
			 		<td><font size='3'>Id</font></td>
					<td><font size='3'>titulo</font></td>
					<td><font size='3'>autor</font></td>
                                        <td><font size='3'>fecha</font></td>
					<td><font size='3'>Opciones</font></td>
				</tr>";
			
		while($row=mysqli_fetch_array($resultado)){
		echo "<tr>".
			 	"<td>".$row["id"]."</td>".
		 		"<td>".$row["titulo"]."</td>".	
				"<td>".$row["autor"]."</td>".
                                "<td>".$row["fecha"]."</td>".
				"<td>"."<a href='formularioModificar.php?id=".$row["id"]."'>"."<img src='Modify.png'/>"."</a>".
				"<a href='eliminar.php?id=".$row["id"]."'>"."<img src='Delete.png'/>"."</a>".
				"<a href='ver.php?id=".$row["id"]."'>"."<img src='Search.png'/>"."</a><"."/td>".
			 "<tr>";
		}
		echo "</table>";
		echo "</fieldset>";
		}
		else{
			echo "</br>No hay autores que listar";
		}
	 mysqli_close($link);
?>
	</br><input type="button" onclick=" location.href='formulario.php'" value="Nuevo" /></br>
	<a href="Cerrar.php">Cerrar Sesion</a>
</body>
</html>