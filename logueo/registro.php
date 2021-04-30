<?php
    if(isset($_POST['user_reg']) && isset($_POST['clave_reg']) && isset($_POST['nom_complete_reg'])){
        $nombre_reg=MysqlQuery::RequestPost('nom_complete_reg');
        $user_reg=MysqlQuery::RequestPost('user_reg');
        $email_reg=MysqlQuery::RequestPost('email_reg');
        $clave_reg=md5(MysqlQuery::RequestPost('clave_reg'));
        $tipo_usuario=MysqlQuery::RequestPost('tipo_usuario');
        
        if ($_SESSION['tipo'] == "admin") { 
          $tipo_reg="admin";
        } else {
          $tipo_reg="user";
        }
        
        if(MysqlQuery::Guardar("login", "nombre_completo, nombre_usuario, email, clave, tipo", "'$nombre_reg', '$user_reg', '$email_reg', '$clave_reg', '$tipo_reg'")){
         
            echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">REGISTRO EXITOSO</h4>
                    <p class="text-center">
                        Cuenta creada exitosamente, ahora puedes iniciar sesión, ya eres usuario de SoporteSystem.
                    </p>
                </div>
            ';
        }else{
            echo '
                <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                        ERROR AL REGISTRARSE: Por favor intente nuevamente.
                    </p>
                </div>
            '; 
        }
    }
?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading text-center"><strong>Para poder registrarte debes de llenar todos los campos de este formulario</strong></div>
        <div class="panel-body">
            <form role="form" action="" method="POST">
            <div class="form-group">
              <label><i class="fa fa-male"></i>&nbsp;Nombre completo</label>
              <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
            </div>
            <div class="form-group has-success has-feedback">
              <label class="control-label"><i class="fa fa-user"></i>&nbsp;Nombre de usuario</label>
              <input type="text" id="input_user" class="form-control" name="user_reg" placeholder="Nombre de usuario" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="20">
              <div id="com_form"></div>
            </div>
            <div class="form-group">
              <label><i class="fa fa-key"></i>&nbsp;Contraseña</label>
              <input type="password" class="form-control" name="clave_reg" placeholder="Contraseña" required="">
            </div>
            <div class="form-group">
              <label><i class="fa fa-envelope"></i>&nbsp;Email</label>
              <input type="email" class="form-control"  name="email_reg"  placeholder="Escriba su email" required="">
            </div>

             <?php if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") { ?> 
               
             <div class="form-group">
              
                <div class="input-group">
                  <label class="control-label"><i class="fa fa-user"></i>&nbsp;Tipo Usuario</label>
                      <select class="form-control" name="tipo_usuario">                          
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                      </select>
                </div>             
            </div>

            <?php } ?>
            <button type="submit" class="btn btn-danger">Crear cuenta</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center hidden-xs">
      <img src="img/linux.png" class="img-responsive" alt="Image">
      <h2 class="text-primary">¡Gracias! Por preferirnos</h2>
    </div>

  </div>
</div>

<script>
    $(document).ready(function(){
        $("#input_user").keyup(function(){
            $.ajax({
                url:"logueo/val.php?id="+$(this).val(),
                success:function(data){
                    $("#com_form").html(data);
                }
            });
        });
    });
</script>