<?php 
  session_start();
 ?>
<!--Pagina de inicio-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" description="Adan Murillo, Jairo Gomez">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="somos el enlace entre emprendedores y proveedores. Queremos darte un gran servicio y productos de la mejor calidad de las diferentes compañías y al precio que más te convenga para que puedas emprender desde ya en tu negocio y tengas el éxito al alcance de tus manos.">
  <meta name="keywords" content="Emprender, Facil, compras en linea, ventas de materiales para emprender, plasticos , vidrios , carton, cajas, envases, etiquetas, ventas al por mayor y detalle....">
  
  <link rel="icon" type="png" href="img/png/041-online-shop.png">

  <link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="Estilos/css/bootstrap.css">
  <link rel="stylesheet" href="Estilos/css/style.css">
  <link rel="stylesheet" href="Estilos/css/carousel.css">
  <link rel="stylesheet" type="text/css" href="Estilos/css/estilos.css">
  <!--archivos para la búsqueda con jquery-->
  <link rel="stylesheet" href="Estilos/css/style_search.css">
  <script src="Estilos/js/jq_search/jquery.js"></script>
  <script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

  <title>Emprende Fácil</title>
  
  <!--Estilo exclusivo del carrusel-->
  <style> 
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
</head>

<body>
  <!--Incluido en todas las paginas, incluye la barra de navegación y sus botones-->
  <header> 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-custom">  
      <!--El siguiente botón permanecerá oculto hasta que sea necesario, usado por responsividad-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="index.php">
        <!--Emprende Fácil-->
        <img src="img/logo/PROTOTIPO6_LOGO.png" height="35px;" style="padding-left: 1em; padding-right: 1em;">
      </a>

      <!--Todo lo incluido en este div sera ocultado en pantallas angostas-->
      <div class="collapse navbar-collapse" id="divCollapse">
        <?php 
          if (empty($_SESSION)){
            echo "<ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"registro.php\">Registrarse</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"login.php\">Iniciar Sesión</a>
                </li>
              </ul>"; 
          } else {
            echo "<ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"perfil.php\">
                    Perfil
                    <img class=\"img-circle img-thumbnail img-responsive\" height=\"20\" width=\"20\" src=\"img\\png\\014-support.png\"/>
                  </a>
                </li>
              </ul>";
          }
         ?>

        <!--Formulario de búsqueda que incluye dos menús desplegables-->
        <form class="form-inline mt-2 mt-md-0">
          <div class="input-group">
            <input type="search" class="form-control" id="input-search" placeholder="Buscar un producto" size="60" /> 
            <span class="input-group-addon">
              <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>

            <div class="content-search">
              <div class="content-table">
                <table id="table">
                  <thead>
                    <tr>
                      <td></td>
                    </tr>
                  </thead>

                  <tbody>
                    <tr> <td> <a href="busqueda.php">Cajas</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Envases</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Etiquetas para productos</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Madera</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Impresiones</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Diseño de logos</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Metales</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Plásticos</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Equipo de oficina</a> </td> </tr>
                    <tr> <td> <a href="busqueda.php">Locales</a> </td> </tr>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!--script para jquery en el buscador-->
          <script src="Estilos/js/jq_search/search.js"></script>


          <a href="pago.php"> <button class="btn" type="button" id="btnCarrito">
            <span class="glyphicon glyphicon-shopping-cart"></span>
          </button></a>
          <?php
            if (!empty($_SESSION)) {
              echo "<!--Menu desplegable #1-->
                <div class=\"dropdown\" style=\"margin-left:auto; margin-right:0;\">
                  <button id=\"btnDespegable_1\" class=\"btn\" type=\"button\" data-toggle=\"dropdown\" data-target = \"#divDesplegable_1\" >
                    <span id=\"spnMenu\" class=\"glyphicon glyphicon-bell\" style=\"color: black\"></span>
                  </button>
                  <div id=\"divDesplegable_1\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"#\">Notificación 1</a> 
                    <a class=\"dropdown-item\" href=\"#\">Notificación 2</a> 
                    <a class=\"dropdown-item\" href=\"#\">Notificación 3</a>
                  </div>
                </div>

                <!--Menu desplegable #2-->
                  <div class=\"dropdown\" style=\"margin-left:auto; margin-right:0;\">
                    <button id=\"btnDesplegable_2\" class=\"btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-target = \"#divDesplegable_2\">
                    </button>
                    <div id=\"divDesplegable_2\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                      <a class=\"dropdown-item\" href=\"perfil.php\">Perfil</a> 
                      <a class=\"dropdown-item\" href=\"#\">Otro</a> 
                      <a class=\"dropdown-item\" href=\"Acciones\\CerrarSesion.php\">Salir</a>
                    </div>
                  </div>";
            }
          ?>
        </form>
      </div>
    </nav>
  </header>

  <!--Inicio del cuerpo principal de la pagina-->
  <main role="main">
  <br>
  <hr>


  <div class="container" >

    <div class="row">

      <p style="font-size:12px">En la categoría:</p><span style="margin-left:15px; font-size:12px"><a href="#">Categoria x</a> > <a href="#">Subcategoria x</a></span>
    </div>
    

    <div class="row" style="margin-bottom:15px"> <!-- Inicio subfila 1 -->
      
      <!--subfila 1 columna 1 -->
      <div class="col-lg-1" style="padding-top: 3em;"> 
          <div class="row" style="padding-bottom: 1em;">  <img src="img/png/006-shopping" height="75" width="75" data-imagenes="img0" style="border:1px solid" class="imagen"> </div>
          <div  class="row" style="padding-bottom: 1em;"> <img src="img/png/005-ecommerce" height="75" width="75" data-imagenes="img1" style="border:1px solid" class="imagen"> </div>
          <div class="row" style="padding-bottom: 1em;"> <img src="img/png/008-reward" height="75" width="75" data-imagenes="img2" style="border:1px solid" class="imagen"> </div>
          <div class="row" style="padding-bottom: 1em;"> <img src="img/png/013-present" height="75" width="75" data-imagenes="img3" style="border:1px solid" class="imagen"> </div>
      </div> 
      <!--fin subfila 1 columna 1 -->

      <!--subfila 1 columna 2 -->
      <div class="col-lg-5" id="cambio"> 
         <img src="img/png/006-shopping" height="350" width="350" style="margin:55px" id="">
         <br>
      </div> 
      <!--fin subfila 1 columna 2 -->

      
      <!--subfila 1 columna 3 -->
      <div style="padding-top: 3em;" class="col-lg-4" >      
            <h3>Tosi Redpoint chiva con la coquein XD</h3>
            <hr>
            <div>
            <p style="margin:0">Calificar: <em>(Evaluando por usuario)</em> </p>
            <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★</label>
            </p> </div>
            <div class="row"><span style="padding-left: 1em;">Categoria:</span> <input type="text" class="form-control col-lg-7" value="Nombre categoria" style="height: 27px; border: none;"></div>
            <div class="row"><span style="padding-left: 1em;">Precio:&ensp;&emsp;</span>  <input type="text" class="form-control col-lg-7" value="$$$ Billete" style="height: 27px; border: none;"></div>
            <div class="row"><span style="padding-left: 1em;">Color:&nbsp;&ensp;&emsp;</span>  <input type="text" class="form-control col-lg-7" value="Nombre Color" style="height: 27px; border: none;"></div>
            <div class="row"><span style="padding-left: 1em;">Tamaño:&ensp;</span>  <input type="text" class="form-control col-lg-7" value="Nombre Color" style="height: 27px; border: none;"></div> <br>
             <div class="row"><span style="padding-left: 1em; padding-right: 1em;">Cantidad:</span> <input type="number" class="form-control col-3" min='0' style="height: 27px;"></div> <br>
             <div class="row"><span style="padding-left: 1em; color:blue;">&emsp;Total Billete:</span> <input type="text" class="form-control col-lg-7" value="$$$$$$" style="height: 27px; border: none;"></div> <br>
             <p>Añadir al carrito▓(editar esta parte)</p>            
      
      </div> <!--fin de subfila1 columna 3-->
      
      <!--inicio de subfila1 columna 4-->
      <div class="col-lg-1" style="padding-left: 5em;" ><iframe src="img/Banners/banner_prot_1/banner_prototipo1.html" scrolling="no" height="600" width="160"  style=" border:none"></iframe> </div>
      <!--fin de subfila1 columna 4-->
    

    </div> <!--fin subfila 1 -->
     

    <div class="row"> <!--subfila 2-->
    <div class="col-lg-10" style="padding-bottom: 3em;"><!--Inicio subfila 2 columna 1 -->

          <h3>Descripción del producto</h3> <br>
          <article style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur ornare ornare. Suspendisse aliquet interdum lorem, a lacinia lacus venenatis at. Donec et accumsan elit. Aliquam facilisis nunc vitae justo ultrices, nec elementum leo pretium. In convallis sodales urna eu tempus. Aenean condimentum facilisis ligula id consequat. Etiam pretium erat elit. Quisque sit amet mauris sit amet libero lacinia tincidunt. Ut lectus augue, fringilla eu risus eu, condimentum auctor enim. Proin vestibulum mi eget sodales pretium. Nullam ut pellentesque nulla. Pellentesque finibus turpis sed justo malesuada consectetur. Sed erat lacus, viverra ac condimentum nec, maximus euismod felis.</article> <br>

          <article style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur ornare ornare. Suspendisse aliquet interdum lorem, a lacinia lacus venenatis at. Donec et accumsan elit. Aliquam facilisis nunc vitae justo ultrices, nec elementum leo pretium. In convallis sodales urna eu tempus. Aenean condimentum facilisis ligula id consequat. Etiam pretium erat elit. Quisque sit amet mauris sit amet libero lacinia tincidunt. Ut lectus augue, fringilla eu risus eu, condimentum auctor enim. Proin vestibulum mi eget sodales pretium. Nullam ut pellentesque nulla. Pellentesque finibus turpis sed justo malesuada consectetur. Sed erat lacus, viverra ac condimentum nec, maximus euismod felis.</article>
    </div><!--Fin subfila 2 columna 1 -->
    </div><!--fin subfila 2-->

    <hr> <br>

    <div class="row"> <!--Inicio subfila 3 -->
      <div class="col-lg-10"> <!--Inicio subfila 3 columna 1-->
        <h3>Preguntas y Respuestas</h3><br>
        <div class="row" style="padding-left: 1em;">
        <input type="text" id="txtcomentario"  placeholder="Escribe una pregunta..." pattern="[A-Za-z]+" title="" size="50">
        <button type="button" class="btn btn-lg btn-primary" style="margin-left:15px">Preguntar</button> 
        </div>
      </div> <!--Inicio subfila 3 columna 1-->
    </div> <!--Fin subfila 3 -->
      

      
    
   </div> <!--Fin del container -->






      <hr class="featurette-divider">
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
    const palabras = document.getElementsByClassName('imagen');

    Array.from(palabras).forEach((elemento) => {
  
    elemento.addEventListener('mouseover', (e) => {
    let imagenes = elemento.getAttribute("data-imagenes");
    const img = document.getElementById("cambio");
    
    switch(imagenes) {
      case "img0": var stringImg = `<img src="img/png/006-shopping" height="350" width="350" style="margin:55px">`;break;
      case "img1": var stringImg = `<img src="img/png/005-ecommerce" height="350" width="350" style="margin:55px">`;break;
      case "img2": var stringImg = `<img src="img/png/008-reward" height="350" width="350" style="margin:55px" >`;break;
      case "img3": var stringImg = `<img src="img/png/013-present" height="350" width="350" style="margin:55px" >`;break;
    }
    
    cambio.innerHTML = stringImg;
    
  });

}); 
    
  </script>
</body>
</html>