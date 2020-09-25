<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Rentas</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Alquileres</h2>
			<button data-toggle="modal" data-target="#newRental" class="btn btn-success">Agregar</button>
		</div>

		<section class="col-md-12">
			<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Fecha inicio</th>
			      <th>Fecha fin</th>
			      <th>Total</th>
				  <th>Usuario</th>
			      <th>Estado</th>
                  <th>Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($rentals as $rental) :?>
				    <tr>
				      <td><?php echo $rental->id ?></td>
				      <td><?php echo $rental->start_date ?></td>
				      <td><?php echo $rental->end_date ?></td>
				      <td><?php echo $rental->total ?></td>
                      <td><?php echo $rental->user ?></td>
					  <td><?php echo $rental->status ?></td>
				      <td>
				      	<button data-toggle="modal" data-target="#editRental<?php echo $rental->id ?>" class="btn btn-success">Editar</button>
				      	<a href="?controller=rental&method=delete&id=<?php echo $rental->id ?>" class="btn btn-danger">Eliminar</a>	
				      </td>				      
				    </tr>
				    <?php include 'views/rental/editModal.php' ?>
				  <?php endforeach ?>		    
			  </tbody>
			</table>
		</section>
	</section>

	<?php include 'views/rental/newModal.php' ?>
</main>