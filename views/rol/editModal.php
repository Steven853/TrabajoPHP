<!-- Modal -->

<div class="modal fade" id="editRole<?php echo $role->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Roles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=role&method=update" method="POST" >
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $role->id?>">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Ingrese el rol" value="<?php echo $role->name?>">
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <select name="status_id" class="form-control">
                              <option value="">Seleccione...</option>
                              <?php 
                                foreach($statuses as $status) {
                                  if($status->Id === $role->status_id) {
                              ?>
                                      <option selected value="<?php echo $role->status_id ?>"><?php echo $role->status ?></option>
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