<!--Pagina de inicio-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" description="Abner">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  
  <link rel="icon" type="png" href="img/png/041-online-shop.png">

  <link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="Estilos/css/bootstrap.css">
  <link rel="stylesheet" href="Estilos/css/style.css">
  <link rel="stylesheet" href="Estilos/css/floating-labels-2.css">

  <link rel="stylesheet" href="Estilos/css/form-validation.css">
  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
  <script>paypal.Buttons().render('#paypal-button');</script>

  <title>Emprende Fácil</title>
  
</head>

<body>
  <!--Incluido en todas las paginas, incluye la barra de navegacion y sus botones-->
  <header> 
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-custom">	 
    <!--El siguiente boton permanecera oculto hasta que sea necesario, usado por responsividad-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse">
     <span class="navbar-toggler-icon"></span>
   </button>

   <a class="navbar-brand" href="index.php">
     Emprende Fácil
   </a>

   <!--Todo lo incluido en este div sera ocultado en pantallas angostas-->
   <div class="collapse navbar-collapse" id="divCollapse">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       <a class="nav-link" href="registro.php">Registrarse</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="login.php">Iniciar Sesión</a>
     </li>
   </ul>
   <!--Formulario de busqueda que incluye dos menus desplegables-->
   <form class="form-inline mt-2 mt-md-0">
    <div class="input-group">
     <input class="form-control" type="search" placeholder="Buscar un producto" size="60" /> 
     <span class="input-group-addon">
      <button class="btn btn-primary" type="submit">
       <span class="glyphicon glyphicon-search"></span>
     </button>
   </span>
 </div>
 
 <button class="btn" type="button" id="btnCarrito">
   <span class="glyphicon glyphicon-shopping-cart"></span>
 </button>
 <!--Menu desplegable #1-->
 <div class="dropdown" style="margin-left:auto; margin-right:0;">
   <button id="btnDespegable_1" class="btn" type="button" data-toggle="dropdown" data-target = "#divDesplegable_1" >
    <span id="spnMenu" class="glyphicon glyphicon-bell" style="color: black"></span>
  </button>
  <div id="divDesplegable_1" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Notificación 1</a> 
    <a class="dropdown-item" href="#">Notificación 2</a> 
    <a class="dropdown-item" href="#">Notificación 3</a>
  </div>
</div>

<!--Menu desplegable #2-->
<div class="dropdown" style="margin-left:auto; margin-right:0;">
 <button id="btnDesplegable_2" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-target = "#divDesplegable_2">
 </button>
 <div id="divDesplegable_2" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="perfil.php">Perfil</a> 
  <a class="dropdown-item" href="#">Otro</a> 
  <a class="dropdown-item" href="#">Salir</a>
</div>
</div>
</form>
</div>
</nav>
</header>

<!--Inicio del cuerpo principal de la pagina-->
<main role="main">
  <div class="container">
    <div class="pt text-center">
      <h2>Carro de Compras</h2>
      <p class="lead"></p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Tu carro</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Producto 1</h6>
              <small class="text-muted">Descripción</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Producto 2</h6>
              <small class="text-muted">Descripción</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Producto 3</h6>
              <small class="text-muted">Descrpción</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$25</strong>
          </li>
        </ul>
      </div>
      <div class="col-md-8 order-md-1">
        <form class="form-signin" novalidate>

          <h4 class="mb-3">Dirección de envio</h4>
          <div class="row">
            
            <div class="col-md-6 mb-3">
              <div class="form-label-group">
                <input type="text" id="firstName" class="form-control" placeholder="Nombre" required autofocus>
                <label for="firstName">Nombre</label>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-label-group">
                <input type="text" id="secondName" class="form-control" placeholder="Apellido" required autofocus>
                <label for="secondName">Apellido</label>
              </div>            
            </div>
          </div>
          <div class="mb-3">
            <div class="form-label-group">
              <input type="email" id="email" class="form-control" placeholder="Correo ELectronico" required autofocus>
              <label for="email">Correo Electrónico</label>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-label-group">
              <input type="text" id="address" class="form-control" placeholder="Direccion de envio" required autofocus>
              <label for="address">Dirección de envio</label>
            </div>        
          </div>

          <div class="mb-3">
            <div class="form-label-group">
              <input type="text" id="address2" class="form-control" placeholder="Direccion de envio secundario" required autofocus>
              <label for="address2">Dirección de envio secundario</label>
            </div>      
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="country">País</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Seleccionar...</option>
                <option>Estados Unidos</option>
                <option>Honduras</option>
                <option>Canada</option>
                <option>El Salvador</option>
                <option>Otro</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="state">Estado</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Seleccionar...</option>
                <option>Estado 1</option>
                <option>Estado 2</option>
                <option>Estado 3</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-3">

              <div class="form-label-group">
                <input type="text" id="zip" class="form-control" placeholder="Zip" required autofocus>
                <label for="zip">Zip</label>
              </div>      
              
            </div>          
          </div>
          <h4 class="mb-3">Método de Pago</h4>
          <div id="paypal-button">
          </div>
        </form>
      </div>
    </div>
  </div>

</main>
<footer>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>	
</footer>
<script src="Estilos/js/jquery.min.js"></script>
<script src="Estilos/js/bootstrap.min.js"></script>
<script src="Estilos/js/scripts.js"></script>	
<script type="text/javascript">
 function changeColor(x){
  if(x.style.color=="black"){
   x.style.color="white";
 }else{
   x.style.color="black";
 }
 return false;
}
</script>
<script type="text/javascript">
 paypal.Button.render({
  env: 'sandbox',
  client: {
    sandbox: 'demo_sandbox_client_id'
  },
  style: {
    color: 'gold',   // 'gold, 'blue', 'silver', 'black'
    size:  'medium', // 'medium', 'small', 'large', 'responsive'
    shape: 'rect'    // 'rect', 'pill'
  },
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '0.01',
          currency: 'USD'
        }
      }]
    });
  },
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
    .then(function () {
      window.alert('Thank you for your purchase!');
    });
  }
}, '#paypal-button');
</script>
</body>
</html>