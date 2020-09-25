<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Peliculas</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Peliculas</h2>
			<button data-toggle="modal" data-target="#newMovie" class="btn btn-success">Agregar</button>
		</div>

		<section class="col-md-12">
			<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Nombre</th>
			      <th>Descripcion</th>
				  <th>Usuario</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($movies as $movie) :?>
				    <tr>
				      <td><?php echo $movie->id ?></td>
				      <td><?php echo $movie->name ?></td>
				      <td><?php echo $movie->description ?></td>
				      <td><?php echo $movie->user ?></td>
					  <td><?php echo $movie->status ?></td>
				      <td>
				      	<button data-toggle="modal" data-target="#editMovie<?php echo $movie->id ?>" class="btn btn-success">Editar</button>
				      	<a href="?controller=movie&method=delete&Id=<?php echo $movie->id ?>" class="btn btn-danger">Eliminar</a>	
				      </td>				      
				    </tr>
				    <?php include 'views/movie/editModal.php' ?>
				  <?php endforeach ?>		    
			  </tbody>
			</table>
		</section>
	</section>

	<?php include 'views/movie/newModal.php' ?>
</main>