<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">Editar pelicula</div>
	</div>
	<div class="panel-body">
	<form class="form-inline" method="POST" action="http://localhost/huaso-crud/index.php/welcome/editar">
		<div class="form-group">
		Nombre:<input type="text" name="Nombre" class="form-control" id="nombre" value="<?php echo $editable->Nombre;?>">
		Sinopsis:<input type="text" name="Sinopsis" id="sinopsis" class="form-control" value="<?php echo $editable->Sinopsis; ?>">
		Genero:<input type="text" name="Genero" id="genero" class="form-control" value="<?php echo $editable->Genero; ?>">
		<input type="hidden" name="id" id="id" value="<?php echo $editable->id;?>">
		<input type="submit" name="boton" class="btn btn-success" id="confirmar" value="editar">		
		</div>
		</form>
	</div>
</div>
</div>
</body>
</html>