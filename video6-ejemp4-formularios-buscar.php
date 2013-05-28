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
		a las etiquetas form, es decir en este momento se esta 
		aplicando la clase form-vertical-->
	    <form class="form-search">
	    <label for="buscar">Que busca</label>
	    <input type="text" name="buscar" id="buscar" class="search-query" />
	    <button class="btn" type="submit">Buscar</button>
	    </form>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>