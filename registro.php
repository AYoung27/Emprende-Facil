<!--Pagina de inicio-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" description="Abner">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="png" href="img/png/041-online-shop.png">
  <link rel="stylesheet" type="text/css" href="Estilos/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Estilos/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="Estilos/css/floating-labels.css">

  <title>Registrate ya</title>
</head>
<form class="form-signin" method="post" action="Acciones/Registrar.php">
 <div class="text-center mb-4">
   <img class="mb-4" src="img/png/041-online-shop.png" alt="" width="72" height="72">
   <h1 class="h3 mb-3 font-weight-normal">Registrate ya</h1>
   <p>El registro es gratis, no necesitas tarjeta de crédito para utilizar esta plataforma</p>
 </div>

 
 <div class="form-label-group">
  <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputEmail">Nombre</label>
</div>

<div class="form-label-group">
  <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputEmail">Apellido</label>
</div>

<div class="form-label-group">
  <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputEmail">Correo electrónico</label>
</div>

<div class="form-label-group">
  <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
  <label for="inputPassword">Contraseña</label>
</div>


<div class="form-label-group">
  <input type="password" id="txtPassword" name="txtPasswordRep" class="form-control" placeholder="Password" required>
  <label for="inputPassword">Repetir contraseña</label>
</div>

<div class="checkbox mb-3">
  <label>
    <input type="checkbox" value="remember-me"> He leído los términos y condiciones
  </label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
<p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
</form>

<script src="Estilos/js/jquery.min.js"></script>
<script src="Estilos/js/bootstrap.min.js"></script>
<script src="Estilos/js/scripts.js"></script>	
</body>
</html>