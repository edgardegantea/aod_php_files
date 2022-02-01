<?php

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];


	$libros = fopen("libros.txt", "a+");

	// Instrucciones para guardar los datos en el archivo libros.txt
	

	$fclose($libros);	

?>