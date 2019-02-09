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
    	<link rel="stylesheet" href="Estilos/css/carousel.css">
		
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
								<a class="dropdown-item" href="#">Perfil</a> 
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
  <div class="py-5 text-center">
    <h2>Carrito</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
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
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3" id="paypal-button">
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