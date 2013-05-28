<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios - </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<!--
		Base CSS  - formularios
		Trae cuatro diseños incluidos
		-Vertical (por defecto)
		-Busqueda
		-En linea
		-Horizontal	
	-->	
</head>
<body>
	<div class="container">
		<!--por defecto bootstrap le agrega la clase form-vertical 
		pero en este caso coloque class="form-inline"-->
	    <form class="form-inline">
	    <label for="nombre">Nombre de etiqueta</label>
	    <input type="text" name="nombre" id="nombre" />
	    <label for="apellido">apellido de etiqueta</label>
	    <input type="text" name="apellido" id="apellido" />
	    </form>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>