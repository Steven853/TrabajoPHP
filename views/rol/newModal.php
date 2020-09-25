<!-- Modal -->
<div class="modal fade" id="newRole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?controller=role&method=save" method="POST">
        <div class="modal-body">
            <div class="card w-100 m-auto">
                <div class="card-header container">
                    <h2 class="m-auto">Datos del Rol</h2>
                </div>

                <div class="card-body w-100">                    
                    <div class="form-group">
                        <label> Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el rol">
                    </div>                  
                    <div class="form-group">
                        <label>Estado</label>
                        <select name="status_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($statuses as $status): ?>
                                <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Generar</button>
        </div>
      </form>
    </div>
  </div>
</div>