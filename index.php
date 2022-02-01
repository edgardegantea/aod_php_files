<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leer Archivo txt con PHP</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">Contenido del archivo de texto plano</p>
  		</div>
	</section>

	<section class="section">
		<p class="subtitle">Lectura de archivo txt desde la misma carpeta que el script</p>
		<div>
			<?php

				$lecturaArchivo = fopen("archivo.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
		</div>
	</section>

	<section class="section">
		<p class="subtitle">Lectura de segundo archivo con ruta en carpeta externa</p>
		<div>
			<?php

				$lecturaArchivo = fopen("C:\Users\degga\Desktop\otroArchivo.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
		</div>
	</section>

	<!-- Script de PHP para crear el archivo notas.txt -->
	<?php
		$crearArchivo = fopen("notas.txt", "w");
		fwrite($crearArchivo, "Esta es la primera línea de mi archivo de texto");
		fputs($crearArchivo, "<br>Esta es mi segunda línea");
		fclose($crearArchivo);
	?>

	<section class="section"> <!-- Script de PHP para leer el archivo notas.txt -->
		<p class="subtitle">Lectura de archivo creado</p>
		<div>
			<?php
				$lecturaArchivo = fopen("notas.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);
			?>
		</div>
	</section>


	<section class="section"> <!-- Script de PHP para leer el archivo notas.txt -->
		<p class="subtitle">Lectura de archivo creado</p>
		<div>

			<!-- Script de PHP para crear el archivo notas.txt -->
			<?php
				$crearArchivo = fopen("notas2.txt", "a+");
				fwrite($crearArchivo, "<br><br>Esta es la primera línea de mi archivo de texto");
				fputs($crearArchivo, "<br>Esta es mi segunda línea");
				fclose($crearArchivo);
			?>

			<?php
				$lecturaArchivo = fopen("notas2.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);
			?>
		</div>
	</section>


	<section class="section">
		
		<form action="guardar.php" method="post">
			<div>
				<label>Título:</label>
				<input type="text" class="input" name="titulo" placeholder="Escribe el título">
			</div>

			<div>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input" placeholder="Agregue la descripción">
					
				</textarea>
			</div>

			<input type="submit" class="button is-link" value="Guardar">
		</form>

	</section>


</body>
</html>


