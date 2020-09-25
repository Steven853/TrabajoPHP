<!-- Modal -->
<div class="modal fade" id="editMovie<?php echo $movie->Id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Peliculas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=movie&method=update" method="POST">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                    </div>
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $movie->Id ?>">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre de la película" value="<?php echo $movie->name?>">
                        </div>

                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" name="description" class="form-control" rows="3" placeholder="Ingrese su email" value="<?php echo $movie->description ?>">
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <select name="user_id" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php 
                                    foreach($users as $user) {
                                        if($user->id === $movie->user_id) {
                                ?>
                                            <option selected value="<?php echo $movie->user_id ?>"><?php echo $movie->user ?></option>
                                    <?php
                                        } else {
                                    ?>
                                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                                <?php
                                        }
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <select name="status_id" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php 
                                foreach($statuses as $status) {
                                  if($status->Id === $movie->status_id) {
                                ?>
                                        <option selected value="<?php echo $movie->status_id ?>"><?php echo $movie->status ?></option>
                                <?php
                                    } else {
                                ?>
                                        <option value="<?php echo $status->Id ?>"><?php echo $status->status ?></option>
                                <?php
                                    }
                                    } 
                                ?>
                            </select>                        
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script src="assets/js/movie.js"></script>