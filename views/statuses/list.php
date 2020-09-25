<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Estados</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<a href="?controller=statuses&method=new" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Tipo de Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($statuses as $status): ?>
						<tr>
							<td><?php echo $status->id ?></td>
							<td><?php echo $status->name ?></td>
							<td><?php echo $status->type ?></td>
							<td>
								<a href="?controller=statuses&method=edit&id=<?php echo $status->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<a href="?controller=statuses&method=delete&id=<?php echo $status->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
