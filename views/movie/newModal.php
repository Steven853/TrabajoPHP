<!-- Modal -->
<div class="modal fade" id="newMovie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--<form action="?controller=movie&method=save" method="POST">-->
        <div class="modal-body">
          <div class="card w-100 m-auto">
              <div class="card-header container">
                  <h2 class="m-auto">Información Pelicula</h2>
              </div>

              <div class="card-body w-100">                
                  <div class="form-group">
                      <label> Nombre</label>
                      <input type="text" id="name" class="form-control" placeholder="Ingrese el nombre">
                  </div>
                  <div class="form-group">
                      <label> Descripción</label>
                      <textarea class="form-control" rows="3" id="description" placeholder="Ingrese la descripción"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <label>Usuarios</label>
                      <select id="user_id" class="form-control">
                          <option value="">Seleccione...</option>
                          <?php foreach($users as $user): ?>
                              <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                          <?php endforeach ?>
                      </select>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Categorías</label>
                        <select id="category" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->Id ?>"><?php echo $category->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                </div>                    

                <div id="list-categories" class="form-group"></div>

                <div class="form-group">
                    <button class="btn btn-primary" id="save">Guardar</button>
                </div>
                  <script src="assets/js/movie.js"></script>  
              </div>             
          </div>
        </div>        
      <!--</form>-->
    </div>
  </div>
</div>
