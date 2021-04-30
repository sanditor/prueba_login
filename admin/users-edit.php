<?php
	if(isset($_POST['id_user']) && isset($_POST['nombre_completo']) && isset($_POST['nombre_usuario']) && isset($_POST['email_usuario']) && isset($_POST['tipo_usuario'])){

    $id_user= MysqlQuery::RequestPost('id_user');
    $nombre_completo= MysqlQuery::RequestPost('nombre_completo'); 
		$nombre_usuario= MysqlQuery::RequestPost('nombre_usuario');		
    $email_usuario=  MysqlQuery::RequestPost('email_usuario');
    $tipo_usuario=  MysqlQuery::RequestPost('tipo_usuario');


   	if(MysqlQuery::Actualizar("login", "nombre_completo='$nombre_completo', nombre_usuario='$nombre_usuario', email='$email_usuario', tipo='$tipo_usuario'", "id_user='$id_user'")){

			echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">Usuario Actualizado</h4>
                    <p class="text-center">
                        El usuario fue actualizado con exito
                    </p>
                </div>
            ';
		}else{
			echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                    No hemos podido actualizar el usuario
                </p>
            </div>
            '; 
		}
	} 
	     
	$id_user = MysqlQuery::RequestGet('id_user');
	$sql = Mysql::consulta("SELECT * FROM login WHERE id_user= '$id_user'");
	$reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);

?>


        <!--************************************ Page content******************************-->
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
                <img src="./img/Edit.png" alt="Image" class="img-responsive animated tada">
            </div>
            <div class="col-sm-9">
                <a href="index.php?view=users" class="btn btn-primary btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Volver administrar usuarios</a>
            </div>
          </div>
        </div>
            
            
          <div class="container">
            <div class="col-sm-12">
                <form class="form-horizontal" role="form" action="" method="POST">
                		<input type="hidden" name="id_user" value="<?php echo $reg['id_user']?>"> 

                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Nombre Completo</label>
                        <div class="col-sm-10">
                            <div class='input-group'>
                                <input type="text" class="form-control"  name="nombre_completo"  value="<?php echo $reg['nombre_completo']?>" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre completo sin acentos">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label  class="col-sm-2 control-label">Nombre Usuario</label>
                        <div class="col-sm-10">
                            <div class='input-group'>
                                <input type="text" class="form-control" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo: maximo 15 caracteres" name="nombre_usuario" value="<?php echo $reg['nombre_usuario']?>">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <div class='input-group'>
                                <input type="email" class="form-control"  name="email_usuario" value="<?php echo $reg['email']?>">
                              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div> 
                        </div>
                      </div>  
                    
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Tipo Usuario</label>
                          <div class='col-sm-10'>
                              <div class="input-group">
                                    <select class="form-control" name="tipo_usuario">
                                      <option value="<?php echo $reg['tipo']?>"><?php echo $reg['tipo']?> (Actual)</option>
                                      <option value="admin">Administrador</option>
                                      <option value="user">Usuario</option>
                                    </select>
                                  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                              </div>
                          </div>
                      </div> 
                    <br>   
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10 text-center">
                              <button type="submit" class="btn btn-info">Actualizar Usuario</button>
                          </div>
                        </div>

                      </form>
            </div><!--col-md-12-->
          </div><!--container-->

          