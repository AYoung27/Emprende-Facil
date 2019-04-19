<?php 
session_start();
if (empty($_SESSION)) {
  header('Location: index.php');
}
include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");

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
  <link type="text/css" rel="stylesheet" href="css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="Estilos/css/bootstrap.css">
  <link rel="stylesheet" href="Estilos/css/style.css">
  <link rel="stylesheet" href="Estilos/css/carousel.css">



  <!--archivos para la búsqueda con jquery-->
  <link rel="stylesheet" href="Estilos/css/style_search.css">
  <script src="Estilos/js/jq_search/jquery.js"></script>
  <script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

  
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="Estilos/css/font-awesome.min.css">


  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="Estilos/css/style_detalles.css"/>


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

<body onload="cargarDiv('barra','Contenido/header.php'), cargarDiv('divCollapse','Contenido/notificacionesBarra.php')">
  <!--Incluido en todas las paginas, incluye la barra de navegación y sus botones-->
  <header> 
    <div id="barra"></div>
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

        <h3> Nombre Producto</h3>

        <hr>
        <div>
          <p style="margin:0; font-size: small;" > Calificacion: <em>(Evaluada por usuario)</em> </p>
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label class="lblstar" for="radio1"> <i class="fa fa-star"></i> </span> </label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label class="lblstar" for="radio2"><i class="fa fa-star"></i></label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label class="lblstar" for="radio3"><i class="fa fa-star"></i></label>
            <input class="lblstar" id="radio4" type="radio" name="estrellas" value="2">
            <label  class="lblstar" for="radio4"><i class="fa fa-star"></i></label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label class="lblstar" for="radio5"><i class="fa fa-star"></i></label>
          </p> 
        </div>


        <div class="row"><span style="padding-left: 1em;">Categoria:&ensp;</span> <label style="height: 27px; "> NombreCategoria </label> </div>

        <div class="row"><span style="padding-left: 1em;">Precio:&emsp;&emsp;</span>  <label style="height: 27px;"> Precio Producto $$$ </label></div>

        <div class="row"><span style="padding-left: 1em;">Color:&nbsp;&emsp;&emsp;</span>  <label style="height: 27px;"> Color Produto </label></div>

        <div class="row"><span style="padding-left: 1em;">Tamaño:&emsp;</span>  <label style="height: 27px;"> Tamaño Producto</label></div> <br>

        <div class="row"><span style="padding-left: 1em; padding-right: 1em;">Cantidad:</span> <input type="number" class="form-control col-3" min='0' style="height: 27px;"></div> <br>

        <div class="row"><span style="padding-left: 1em; color:blue;">&emsp;Total Billete:</span> <label style="height: 27px;">TotalProductosLLevados$$$</div> <br>

          <div class="row" style="padding-left:  2em;">
            <div class="add-to-cart" >
              <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
            </div>
          </div> <!--fin de subfila1 columna 3-->
        </div>
        <!--inicio de subfila1 columna 4-->
        <div class="col-lg-1" style="padding-left: 5em;" ><iframe src="img/Banners/banner_prot_1/banner_prototipo1.html" scrolling="no" height="600" width="160"  style=" border:none"></iframe> </div>
        <!--fin de subfila1 columna 4-->


      </div> <!--fin subfila 1 -->


      <div class="row"> <!--subfila 2-->
        <div class="col-lg-10" style="padding-bottom: 3em;"><!--Inicio subfila 2 columna 1 -->

          <!-- Product tab -->
          <div class="col-md-12">
            <div id="product-tab">
              <!-- product tab nav -->
              <ul class="tab-nav">
                <li class="active" ><a data-toggle="tab" href="#tab1">Descripcion</a></li>
                
                <li><a data-toggle="tab" href="#tab3">Comentarios</a></li>
              </ul>
              <!-- /product tab nav -->

              <!-- product tab content -->
              <div class="tab-content">
                <!-- tab1  -->
                <div id="tab1" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                </div>
                <!-- /tab1  -->



                <!-- tab3  -->
                <div id="tab3" class="tab-pane fade in active">
                  <div class="row">
                    <!-- Rating -->
                    <div class="col-md-3">
                      <div id="rating">
                        <div class="rating-avg"> <!--rating promediado jalar pocion con codigo, los colores azul se activan al datos las estrellas-->
                          <span>5.1XD</span>    
                          <div class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label class="" for="radio2"><i class="fa fa-star"></i></label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label class="" for="radio3"><i class="fa fa-star"></i></label>
                            <input class="" id="radio4" type="radio" name="estrellas" value="2">
                            <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label class="" for="radio5"><i class="fa fa-star"></i></label>
                          </div> 
                        </div>


                        <ul class="rating">
                          <li>
                            <div class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                              <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                              <label class="" for="radio2"><i class="fa fa-star"></i></label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                              <label class="" for="radio3"><i class="fa fa-star"></i></label>
                              <input class="" id="radio4" type="radio" name="estrellas" value="2">
                              <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                              <label class="" for="radio5"><i class="fa fa-star"></i></label>
                            </div> 
                            <div class="rating-progress">
                              <div style="width: 80%;"></div>
                            </div>
                            <span class="">3</span>
                          </li>


                          <li>
                            <div class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                              <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                              <label class="" for="radio2"><i class="fa fa-star"></i></label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                              <label class="" for="radio3"><i class="fa fa-star"></i></label>
                              <input class="" id="radio4" type="radio" name="estrellas" value="2">
                              <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                              <label class="" for="radio5"><i class="fa fa-star"></i></label>
                            </div> 
                            <div class="rating-progress">
                              <div style="width: 60%;"></div>
                            </div>
                            <span class="">2</span>
                          </li>
                          

                          <li>
                            <div class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                              <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                              <label class="" for="radio2"><i class="fa fa-star"></i></label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                              <label class="" for="radio3"><i class="fa fa-star"></i></label>
                              <input class="" id="radio4" type="radio" name="estrellas" value="2">
                              <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                              <label class="" for="radio5"><i class="fa fa-star"></i></label>
                            </div> 
                            <div class="rating-progress">
                              <div></div>
                            </div>
                            <span class="">0</span>
                          </li>
                          

                          <li>
                            <div class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                              <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                              <label class="" for="radio2"><i class="fa fa-star"></i></label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                              <label class="" for="radio3"><i class="fa fa-star"></i></label>
                              <input class="" id="radio4" type="radio" name="estrellas" value="2">
                              <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                              <label class="" for="radio5"><i class="fa fa-star"></i></label>
                            </div> 
                            <div class="rating-progress">
                              <div></div>
                            </div>
                            <span class="">0</span>
                          </li>
                          
                          <li>
                            <div class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                              <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                              <label class="" for="radio2"><i class="fa fa-star"></i></label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                              <label class="" for="radio3"><i class="fa fa-star"></i></label>
                              <input class="" id="radio4" type="radio" name="estrellas" value="2">
                              <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                              <label class="" for="radio5"><i class="fa fa-star"></i></label>
                            </div> 
                            <div class="rating-progress">
                              <div></div>
                            </div>
                            <span class="">0</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- /Rating -->

                    <!-- Reviews -->
                    <div class="col-md-6">
                      <div id="reviews">
                        <ul class="reviews">
                          <li>
                            <div class="review-heading">
                              <h5 class="name">John</h5>
                              <p class="date">27 DEC 2018, 8:0 PM</p>
                              <div class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label class="" for="radio2"><i class="fa fa-star"></i></label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label class="" for="radio3"><i class="fa fa-star"></i></label>
                                <input class="" id="radio4" type="radio" name="estrellas" value="2">
                                <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label class="" for="radio5"><i class="fa fa-star"></i></label>
                              </div> 
                            </div>
                            <div class="review-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                          </li>
                          <li>
                            <div class="review-heading">
                              <h5 class="name">John</h5>
                              <p class="date">27 DEC 2018, 8:0 PM</p>
                              <div class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label class="" for="radio2"><i class="fa fa-star"></i></label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label class="" for="radio3"><i class="fa fa-star"></i></label>
                                <input class="" id="radio4" type="radio" name="estrellas" value="2">
                                <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label class="" for="radio5"><i class="fa fa-star"></i></label>
                              </div> 
                            </div>
                            

                            <div class="review-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                          </li>
                          <li>
                            <div class="review-heading">
                              <h5 class="name">John</h5>
                              <p class="date">27 DEC 2018, 8:0 PM</p>
                              <div class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label class="" for="radio1"> <i class="fa fa-star"></i> </span> </label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label class="" for="radio2"><i class="fa fa-star"></i></label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label class="" for="radio3"><i class="fa fa-star"></i></label>
                                <input class="" id="radio4" type="radio" name="estrellas" value="2">
                                <label  class="" for="radio4"><i class="fa fa-star"></i></label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label class="" for="radio5"><i class="fa fa-star"></i></label>
                              </div> 
                            </div>
                            <div class="review-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                          </li>
                        </ul>
                        

                        <ul class="reviews-pagination">
                          <li class="active">1</li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Review Form -->
                    <div class="col-md-3">
                      <div id="review-form">
                        <form class="review-form">
                          <div style="padding-bottom: 1em;">
                            <input type="text" class="form-control" id="txtNombreProducto" name="txtNombreProducto" placeholder="Tu Nombre" value="" size="40">
                          </div>
                          <div style="padding-bottom: 1em;">
                            <input type="text" class="form-control" id="txtNombreProducto" name="txtNombreProducto" placeholder="Tu Nombre" value="" size="40">
                          </div>
                          <div style="padding-bottom: 1em;">
                            <textarea class="form-control" placeholder="Escribe tu comentario."></textarea>
                          </div>


                          <div class="input-rating">
                            <span>Calificar: </span>
                            <div class="stars">
                              <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                              <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                              <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                              <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                              <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                            </div>
                          </div>
                          <button type="button" class="btn btn-lg-12 btn-primary" style=" margin-left:5px; border-radius: 40px 40px 40px 40px;">Enviar
                          </form>
                        </div>
                      </div>
                      <!-- /Review Form -->
                    </div>
                  </div>
                  <!-- /tab3  -->
                </div>
                <!-- /product tab content  -->
              </div>
            </div>
            <!-- /product tab -->


          </div><!--Fin subfila 2 columna 1 -->
        </div><!--fin subfila 2-->

        <hr> <br>

        <div class="row"> <!--Inicio subfila 3 -->
          <div class="col-lg-10"> <!--Inicio subfila 3 columna 1-->
            <h3>Preguntas y Respuestas</h3><br>
            <div class="row" style="padding-left: 1em;">
              <input type="text" id="txtcomentario"  placeholder="Escribe una pregunta..." pattern="[A-Za-z]+" title="" size="50">
              <button type="button" class="btn btn-lg btn-primary" style="margin-left:15px; border-radius: 40px 40px 40px 40px;">Preguntar</button> 
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
    <script src="Estilos/js/cargarContenido.js"></script>
    <script src="Estilos/js/slick.min.js"></script>
    <script src="Estilos/js/nouislider.min.js"></script>
    <script src="Estilos/js/jquery.zoom.min.js"></script>
    <script src="Estilos/js/main.js"></script>
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