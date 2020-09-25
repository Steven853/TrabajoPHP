<main class="container">
	<section class="col-md-12 text-center">
		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Tipos de Estado</h2>
			<a href="?controller=typeStatus&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombres</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($typeStatuses as $typeStatus): ?>
						<tr>
							<td><?php echo $typeStatus->id ?></td>
							<td><?php echo $typeStatus->name ?></td>
							<td>
								<a href="?controller=typeStatus&method=edit&id=<?php echo $typeStatus->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<a href="?controller=typeStatus&method=delete&id=<?php echo $typeStatus->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>