<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clases success, info, error y warning</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />	
</head>
<body>
	<p>Aplicando la clase table a la tabla le da un formato mas estetico</p>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
				</tr>
			</thead>	
			<tbody>
				<tr class="success">
					<td>1</td>
					<td>Mensaje con la clase success</td>
				</tr>
				<tr class="info">
					<td>1</td>
					<td>Mensaje con la clase info</td>
				</tr>
				<tr class="error">
					<td>1</td>
					<td>Mensaje con la clase error</td>
				</tr>
				<tr class="warning">
					<td>1</td>
					<td>Mensaje con la clase warning</td>
				</tr> 																
			</tbody>
		</table>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>