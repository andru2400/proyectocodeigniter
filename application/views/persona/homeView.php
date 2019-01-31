<div class="col-md-12" style="padding: 1%">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

			<p style="padding: 1%" >Bienvenido Usuario: <?php echo $this->session->userdata('nombres'); ?></p>
			<h4 style="padding: 1%" >Actualizar persona (Mis datos)</h4>

            <form class="form-horizontal" action="<?php echo base_url()?>PersonaController/actualize" method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">1 apellido</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="1 apellido">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">2 apellido</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="2 apellido">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>                               

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
           
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Enviar</button>
              </div>
              <!-- /.box-footer -->
            </form>

			<form class="form-horizontal" action="<?php echo base_url()?>PersonaController/destroy" method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id persona</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_persona" placeholder="Email">
                  </div>
                </div>                           

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
           
              <!-- /.box-body -->
              <div class="box-footer"> 
                <button type="submit" class="btn btn-info pull-right">Eliminar</button>
              </div>
              <!-- /.box-footer -->
            </form>
         </div>
</div>







       