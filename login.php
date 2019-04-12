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

  <title>Iniciar Sesión</title>
</head>
<form class="form-signin" method="post" action="Acciones/iniciarSesion.php">
 <div class="text-center mb-4">
   <img class="mb-4" src="img/png/041-online-shop.png" alt="" width="72" height="72">
   <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
 </div>  

 <div class="form-label-group">
  <input type="email" id="inputEmail" name="txtCorreo" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputEmail">Correo electrónico</label>
</div>

<div class="form-label-group">
  <input type="password" id="inputPassword" name="txtPassword" class="form-control" placeholder="Password" required>
  <label for="inputPassword">Contraseña</label>
</div>

<div class="checkbox mb-3">
  <label>
    <input type="checkbox" value="remember-me" > Recuérdame
    <a href="contraseña.php" style="margin-left:70px">¿Has olvidado tu contraseña?</a>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
  <a href="index.php" class="btn btn-lg btn-danger btn-block">Cancelar</a>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
</form>

<script src="Estilos/js/jquery.min.js"></script>
<script src="Estilos/js/bootstrap.min.js"></script>
<script src="Estilos/js/scripts.js"></script>	
</body>
</html>