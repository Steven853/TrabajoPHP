
<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Roles</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Roles</h2>
			<button data-toggle="modal" data-target="#newRole" class="btn btn-success"> Agregar
			</button>
		</div>

		<section class="col-md-12">
			<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Nombre</th>
			      <th>Estado</th>
				  <th>Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($roles as $role):?>
				    <tr>
				      <td><?php echo $role->id ?></td>
				      <td><?php echo $role->name ?></td>
				      <td><?php echo $role->status ?></td>
				      <td>
				      	<button data-toggle="modal" data-target="#editRole<?php echo $role->id ?>" class="btn btn-success">Editar</button>
				      	<a href="?controller=role&method=delete&id=<?php echo $role->id ?>" class="btn btn-danger">Eliminar</a>
				      </td>				      
				    </tr>
				    <?php include 'views/rol/editModal.php' ?>
				<?php endforeach ?>		    
			  </tbody>
			</table>
		</section>
	</section>`
	<?php include 'views/rol/newModal.php' ?>

</main>
