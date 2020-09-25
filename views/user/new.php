<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Usuario</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del Usuario</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=user&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ej. Pedro Perez">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Ej. pedro@pedro.com">
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="password" class="form-control" placeholder="******">
					</div>
					<div class="form-group">
                        <label>Role</label>
                        <select name="role_id" class="form-control">
                            <option value="">Seleccione Rol</option>
                            <?php foreach($roles as $role): ?>
                                <option value="<?php echo $role->id ?>"><?php echo $role->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
					<div class="form-group">
						<button class="btn btn-success">Registrar Usuario</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>