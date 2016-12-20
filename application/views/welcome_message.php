
<div id="container-fluid">

<h1>Peliculas</h1>
	<table class="table table-borderer">
		<thead>
				<th>Nombre</th>
				<th>Sinopsis</th>
				<th>Genero</th>
				<th>Arrendado</th>
				<th>Acciones</th>

		</thead>

		<tbody>

				<?php foreach ($peliculas as $pelicula) { ?>
				<tr>
				<td><?php echo $pelicula->Nombre;?></td>
				<td><?php echo $pelicula->Sinopsis; ?></td>
				<td><?php echo $pelicula->Genero; ?></td>
				<td><?php echo $pelicula->cantidad; ?></td>
				<td>
				<a href="index.php/welcome/editarindex/<?php echo $pelicula->id;?>" class="btn btn-success">editar</a>
				<a href="index.php/welcome/eliminar/<?php echo $pelicula->id;?>" class="btn btn-warning">eliminar</a>
				<a href="index.php/welcome/arrendar/<?php echo $pelicula->id;?>" class="btn btn-danger">Arrendar</a>
				<a href="index.php/welcome/devolver/<?php echo $pelicula->id;?>" class="btn btn-primary">Devolver</a>

				</td>
				</tr>
				<?php } ?>
		</tbody>







	</table>
</div>

