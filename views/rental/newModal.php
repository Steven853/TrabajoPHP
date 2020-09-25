<!-- Modal -->
<div class="modal fade" id="newRental" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?controller=rental&method=save" method="POST">-
        <div class="modal-body">
            <div class="card w-100 m-auto">
                <div class="card-header container">
                    <h2 class="m-auto">Información de Renta</h2>
                </div>

                <div class="card-body w-100">                    
                    <div class="form-group">
                        <label>Fecha Inicio</label>
                        <input type="date" id="start_date" class="form-control" placeholder="Ingrese la fecha de incio">
                    </div>
                    <div class="form-group">
                        <label>Fecha Fin</label>
                        <input type="date" id="end_date" class="form-control" placeholder="Ingrese la fecha de fin">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" id="total" class="form-control" placeholder="Monto">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <select id="user_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-8">                            
                            <label>Peliculas</label>
                            <select id="movie" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php foreach($movies as $movie): ?>
                                    <option value="<?php echo $movie->id ?>"><?php echo $movie->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-4 mt-4">
                            <a href="#" class="btn btn-success" id="addElement">+</a>
                        </div>
                    </div>                    

                    <div id="list-movie" class="form-group"></div>

                    <div class="form-group">
                        <button class="btn btn-primary" id="save">Guardar</button>
                    </div>
                    <script src="assets/js/rental.js"></script>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>