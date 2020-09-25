<!-- Modal -->
<div class="modal fade" id="editRental<?php echo $rental->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=rental&method=update" method="POST">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $rental->id ?>">
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input type="datetime-local" name="start_date" class="form-control" value="<?php echo $rental->start_date ?>">
                        </div>
                        <div class="form-group">
                            <label>Fecha Fin</label>
                            <input type="datetime-local" name="end_date" class="form-control" value="<?php echo $rental->end_date ?>">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" name="total" class="form-control" placeholder="Monto" value="<?php echo $rental->total ?>">
                        </div>                      
                        <div class="form-group">
                            <label>Usuario</label>
                            <select name="user_id" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php 
                                    foreach($users as $user) {
                                        if($user->id === $rental->user_id) {
                                ?>
                                            <option selected value="<?php echo $rental->user_id ?>"><?php echo $rental->user ?></option>
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
                                  if($status->Id === $rental->status_id) {
                              ?>
                                      <option selected value="<?php echo $rental->status_id ?>"><?php echo $rental->name ?></option>
                              <?php
                                  } else {
                              ?>
                                      <option value="<?php echo $status->Id ?>"><?php echo $status->name ?></option>
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