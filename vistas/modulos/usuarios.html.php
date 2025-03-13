
<div class="content-wrapper">

  <section class="content-header">
      
      <h1>

          Administrar usuarios
       
      </h1>

       <ol class="breadcrumb">
          <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
          <li class="active">Administrar usuarios</li>
        </ol>

  </section>

 
  <section class="content">

    
      <div class="box">

      <div class="box-header with-border">
        
        <button class="btn btn-primary" data-toggle="modal"data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped td-responsive tablas">
          
          <thead>
            
            <tr>
              
              <th style="width: 10px;">#</th>

              <th>Nombre</th>

              <th>Usuario</th>

              <th>Foto</th>

              <th>Perfil</th>

              <th>Estado</th>

              <th>Último login</th>

              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>
            
            <tr>
              
              <td>1</td>

              <td>Usuario administrador</td>

              <td>admin</td>

              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>

              <td>Administrador</td>

              <td><button class="btn btn-success btn-xs">Activado</td>

              <td>2025-04-03 11:28:24</td>

               <td>
                 
                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    

                  </div>

               </td>

            </tr>

             <tr>
              
              <td>1</td>

              <td>Usuario administrador</td>

              <td>admin</td>

              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>

              <td>Administrador</td>

              <td><button class="btn btn-success btn-xs">Activado</td>

              <td>2025-04-03 11:28:24</td>

               <td>
                 
                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    

                  </div>

               </td>

            </tr>

          </tbody>


        </table>


      </div>
      
    </div>
    
  </section>
  
</div>



<!-- VENTANA REGISTRO USUARIOS  -->


<div id="modalAgregarUsuario" class="modal fade" role="dialog" >

    <div class="modal-dialog">

        <div class="modal-content">

          <form role="form" method="post" enctype="multipart/form-data">
            
            <div class="modal-header"style="background:  #2db3a4;color:#fff;">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar usuario</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                  <!-- INGRESAR NOMBRE  -->

                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input class= "form-control input-lg"type="text" name="nuevoNombre" placeholder="Ingresar nombre" required>

                    </div>

                  </div>

                  <!-- INGRESAR USUARIO  -->

                   <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                      <input class= "form-control input-lg"type="text" name="nuevoUsuario" placeholder="Ingresar usuario" required>

                    </div>

                  </div>

                  <!-- INGRESAR CONTRASEÑA  -->


                     <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input class= "form-control input-lg"type="password" name="nuevoPassword" placeholder="Ingresar contraseña" required>

                    </div>

                  </div>

                    <!-- SELECCIONAR PERFIL  -->


                    <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>

                      <select class="form-control input-lg" name="nuevoPerfil">
                        
                        <option value="">Seleccione un perfil</option>

                        <option value="Administrador">Administrador</option>

                        <option value="Especial">Especial</option>

                        <option value="Vendedor">Vendedor</option>

                      </select>

                    </div>

                  </div>

                  <!-- SUBIR FOTO  -->

                   <div class="form-group">
                    
                    <div class="panel">SUBIR FOTO</div>

                    <input type="file"id="nuevaFoto" name="nuevaFoto">

                    <p class="help-block">Peso máximo de la foto 200MB</p>

                    <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

                  </div>



                </div>

               
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                <button type="submit" class="btn btn-primary" data-dismiss="modal">Guardar</button>

            </div>

          </form>

            

        </div>

    </div>
</div>
