<?php 
  session_start();
 ?>
<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
    <h4 class="mt-3 mb-3" style="text-align: center;">
        Modifica tu perfil
    </h4>
</div>
<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
    <form name="modifyProfile" id="profileForm" method="post" action="Acciones/modificarDatosUsuario.php">
        <div class="col-md-12 col-md-offset-2">                
            <div class="control-group form-group">
               <div class="controls">
                    <br>
                    <label><strong>Información básica</strong></label><br>
                    <div id="dropbox" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
                        <span class="message"><h6>Arrastra una imagen para subir a tu perfil</h6></span>
                    </div>
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="txtName" name="txtNombre" value="<?php echo $_SESSION['Nombre'];?>" required data-validation-required-message="Por favor introduzca su nomnbre.">
                   <br>
                   <label>Apellido</label>
                   <input type="text" class="form-control" id="txtSurname" name="txtApellido" value="<?php echo $_SESSION['Apellido'];?>" required data-validation-required-message="Por favor introduzca sus apellidos.">
                   <br>
                   <label>Correo</label>
                   <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $_SESSION['Correo'];?>" required data-validation-required-message="Por favor introduzca su email.">
               </div>
           </div>
           <div class="form-group">
                <button type="submit" id="btnEnviar" class="btn btn-primary btn-lg btn-block">Actualizar</button>
            </div>
            <div class="form-group">
               <a href="perfil.php" class="btn btn-lg btn-danger btn-block">Cancelar</a>
            </div>
            <br>
        </div>
    </form>
</div>
<script type="text/javascript">
      $.getScript('Estilos/js/script.js');
</script>