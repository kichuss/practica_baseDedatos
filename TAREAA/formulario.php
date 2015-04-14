<html>
	<body>
		<form method="POST" action="guardar.php">
			<fieldset>
				<legent align="center"><font color="red">Nuevo                                 Autor</font></legent></br>	
				</br><label for="autor"><font color="blue">Nombre del                                 autor</font></label></br>
			  	<input type="text" name="autor" id="autor" value=""></br>

			  	<label for="titulo"><font color="blue">titulo</font></label></br>
				<input type="text" name="titulo" id="titulo" value=""></br>

				<label for="fecha"><font color="blue">fecha</font></label></br>
				<input type="date" name="fecha" id="fecha" value=""></br>

				<label for="contenido"><font                                  color="blue">contenido</font></label></br>
				<textarea  name="contenido"  id="contenido" row="100"                                 cols="50"></textarea></br>
				
				</br>
				<input type="submit" value="Guardar">
			</fieldset>
		</from>
	</body>
</html>