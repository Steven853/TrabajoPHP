<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Categoria</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la Categoria</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=category&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $data[0]->id ?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ej. Pedro Perez" value="<?php echo $data[0]->name ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($statuses as $status) {
                            		if($status->Id === $data[0]->status_id) {
                            ?>
                                		<option selected value="<?php echo $status->id ?>"><?php echo $status->status ?></option>
                            <?php
                            		} else {
                            ?>
                                		<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php
                            		}
                            	} 
                            ?>
                        </select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>