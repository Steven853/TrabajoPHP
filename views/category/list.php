<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Categorias</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<a href="?controller=category&method=new" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombres</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($categories as $category): ?>
						<tr>
							<td><?php echo $category->id ?></td>
							<td><?php echo $category->name ?></td>
							<td><?php echo $category->status ?></td>
							<td>
								<a href="?controller=category&method=edit&id=<?php echo $category->id?>" class="btn btn-warning" title="Editar categoria">Editar</a>
								<a href="?controller=category&method=delete&id=<?php echo $category->id?>" class="btn btn-danger" title="Eliminar categoria">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
