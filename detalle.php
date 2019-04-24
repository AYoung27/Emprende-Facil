<?php 
session_start();
include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");

function cargarDetalleProducto($conexion, $idProducto){
	$consulta = sprintf("SELECT NombreProducto, Valoracion, PrecioActual, ImagenPrincipal, tbl_categoria.NombreCategoria, tbl_color.NombreColor FROM tbl_producto, tbl_categoria, tbl_color WHERE tbl_producto.IDCategoria = tbl_categoria.IDCategoria AND tbl_color.IDColor = tbl_producto.IDColor AND IDProducto = '%s'", $conexion->antiInyeccion($idProducto));
	$resultado = $conexion->ejecutarconsulta($consulta);
	$data = $conexion->obtenerFila($resultado);
	$valoracion = (intval($data["Valoracion"]));
	echo '<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Todas las categorias</a></li>
							<li><a href="busqueda.php?cat='.$data["NombreCategoria"].'">'.$data["NombreCategoria"].'</a></li>
							<li class="active">'.$data["NombreProducto"].'</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="container" >
      	<div class="row" style="margin-bottom:15px"> <!-- Inicio subfila 1 -->

        <!--subfila 1 columna 1 -->
        <div class="col-lg-1 " style="padding-top: 3em;"> 
           <img src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'" height="90" width="90" data-imagenes="img0" class="imagen mb-3 border" >
           <img src="img/png/005-ecommerce" height="90" width="90" data-imagenes="img1" class="imagen mb-3 border" > 
           <img src="img/png/008-reward" height="90" width="90" data-imagenes="img2" class="imagen mb-3 border" > 
          <img src="img/png/013-present" height="90" width="90" data-imagenes="img3" class="imagen mb-3 border" > 
        </div> 
        <!--fin subfila 1 columna 1 -->

        <!--subfila 1 columna 2 -->
        <div class="col-lg-5"  id="cambio"> 
         <img src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'" height="350" width="350" style="margin:55px" id="" >
         <br>
       </div> 
       <!--fin subfila 1 columna 2 -->


       <!--subfila 1 columna 3 -->
       <div style="padding-top: 3em;" class="col-lg-4" >      

        <h3>'.$data["NombreProducto"].'</h3>
                <hr>
        <div>
          <p style="margin:0; font-size: small;" > Calificacion: <em>(Evaluada por usuario)</em> </p>
          <p class="clasificacion">
          <div class="product-rating">';

        for ($j=0; $j < $valoracion ; $j++) { 
				echo '			<i class="glyphicon glyphicon-star"></i>';
			}

			$valoracion = 5 - $valoracion;
			for ($k=0; $k < $valoracion; $k++) { 
				echo '			<i class="glyphicon glyphicon-star-empty"></i>';
			}

        echo '
          </div>
        	<hr>
          </p> 
        </div>


        <div class="row">
        	<span style="padding-left: 1em;">Categoria:&ensp;</span> <label style="height: 27px; "> '.$data["NombreCategoria"].' </label> </div>

        <div class="row"><span style="padding-left: 1em;">Precio:&emsp;&emsp;</span>  <label style="height: 27px;">HNL'.' '.$data["PrecioActual"].'</label></div>

        <div class="row"><span style="padding-left: 1em;">Color:&nbsp;&emsp;&emsp;</span>  <label style="height: 27px;">'.$data["NombreColor"].'</label></div>
		<br>

        <div class="row"><span style="padding-left: 1em; padding-right: 1em;">Cantidad:</span> <input type="number" class="form-control col-3" min="0" style="height: 27px;"></div> <br>

        <div class="row"><span style="padding-left: 1em; color:blue;">Total Billete:</span> <label style="height: 27px;">ni idea de como modificar esto via php</div> <br>

          <div class="row" style="padding-left:  2em;">
            <div class="add-to-cart" >
            	<button class="add-to-cart-btn" onclick="addCarrito('.$idProducto.')"><i class="glyphicon glyphicon-shopping-cart"></i>Agregar al carrito</button>
            </div>
          </div> <!--fin de subfila1 columna 3-->
        </div>

'

		;
}
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
  	<?php  
  		if (isset($_GET["idp"])) {
  			cargarDetalleProducto($conexion, $_GET["idp"]);
  		}
  	 ?>
    
        <!--inicio de subfila1 columna 4-->
        <div class="col-md-1" style="padding-left: 5em;" ><iframe src="img/Banners/banner_prot_1/banner_prototipo1.html" scrolling="no" height="600" width="160"  style=" border:none"></iframe> </div>
        <!--fin de subfila1 columna 4-->


      </div> <!--fin subfila 1 -->


      <div class="row"> <!--subfila 2-->
        <div class="col-lg-10" style="padding-bottom: 3em;"><!--Inicio subfila 2 columna 1 -->

          <!-- Product tab -->
          <div class="col-md-12">
           
                 <p class="mb-5"><h4 style="text-align: center;">Descripcion</h4></p>  

                  <div class="row">
                      <?php
                        $sql= "SELECT Descripcion FROM tbl_producto where IDProducto=".$_GET['idp'];
                        $resul=$conexion->ejecutarconsulta($sql);
                        $descrip=$conexion->obtenerFila($resul);
                        echo "<p>".$descrip['Descripcion']."</p>";
                        ?>
                </div>
                <hr>

                  <p class="mb-5"><h4 style="text-align: center;">Comentarios y Valoracion</h4></p>  

                  <div class="row">

                    <!-- Rating -->
                    <div class="col-md-3">
                      <div id="rating">
                        <div class="rating-avg"> <!--rating promediado jalar pocion con codigo, los colores azul se activan al datos las estrellas-->
                          <?php $consulta ="SELECT FLOOR(avg(Valoracion)) as rating from tbl_comentarios_producto where IDProducto=".$_GET['idp'];
                            $resultado=$conexion->ejecutarconsulta($consulta);
                            $valor=$conexion->obtenerFila($resultado);
                            echo "<span style='font-size:medium'>Calificacion : ".$valor['rating']."</span>";
                            echo "<div class=\"clasificacion\">";
                            $valoracion=5-$valor['rating'];
                                for ($i=0; $i <$valoracion ; $i++) { 
                                  echo "<label for=\"radio1\"> <i class=\"fa fa-star\" style=\"color:black;\"></i> </span> </label>";
                                }
                                for ($i=0; $i <$valor['rating']; $i++) { 
                                  echo "<label for=\"radio1\"> <i class=\"fa fa-star\" style=\"color:#007bff;\"></i> </span> </label>";
                                }
                                echo "</div>";
                                if($resultado->num_rows>0){
                                $consulta ="UPDATE tbl_producto SET Valoracion=".$valor['rating']." where IDProducto=".$_GET['idp'];
                                $conexion->ejecutarconsulta($consulta);
                              }else{
                                $consulta ="UPDATE tbl_producto SET Valoracion='0' where IDProducto=".$_GET['idp'];
                                $conexion->ejecutarconsulta($consulta);
                              }
                           ?>
                            

                         </div>
                      
                    </div>
                  </div>

                    <!-- /Rating -->

                    <!-- Reviews -->
                    <div class="col-md-6">
                      <div id="reviews">
                        <ul class="reviews">
                          <?php 
                            $consulta= "SELECT Comentario, Valoracion, Nombre , Fecha, Hora FROM tbl_comentarios_producto, tbl_usuario where tbl_comentarios_producto.IDUsuario=tbl_usuario.IDUsuario and tbl_comentarios_producto.IDProducto=".$_GET['idp'];
                            $resultado = $conexion->ejecutarconsulta($consulta);
                            if($resultado->num_rows>0){
                            while($arreglo=$conexion->obtenerFila($resultado)){
                              echo "<li>
                                <div class=\"review-heading\">
                              <h5 class=\"name\">".$arreglo['Nombre']."</h5>
                              <p class=\"date\">".$arreglo['Fecha'].", ".$arreglo['Hora']."</p>
                              <div class=\"clasificacion\">";
                                  $valoracion=5-$arreglo['Valoracion'];
                                for ($i=0; $i <$valoracion ; $i++) { 
                                  echo "<label for=\"radio1\"> <i class=\"fa fa-star\" style=\"color:black;\"></i> </span> </label>";
                                }
                                for ($i=0; $i <$arreglo['Valoracion']; $i++) { 
                                  echo "<label for=\"radio1\"> <i class=\"fa fa-star\" style=\"color:#007bff;\"></i> </span> </label>";
                                }

                             echo "</div> 
                            </div>
                            <div class=\"review-body\">
                              <p>".$arreglo['Comentario']."</p>
                            </div>
                          </li>";
                          }
                            }else{
                              echo "Aun no hay comentarios para mostrar";
                            }
                           ?>
                        </ul>
                      </div>
                    </div>
                   
                    <!-- /Reviews -->

                    <!-- Review Form -->
                    <div class="col-md-3">
                      <div id="review-form">
                          <form class="review-form" method="POST" action="Acciones/comentariosProducto.php">
                          <div class="input-rating">
                            <span>Calificar: </span>
                            <div class="stars">
                              <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                              <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                              <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                              <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                              <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                            </div>

                            <textarea class="form-control" placeholder="Escribe tu comnetario..." id="txtComentario" name="txtComentario"></textarea>
                            <button type="submit" class="btn btn-primary mt-2" style="border-radius: 40px; float: right;">Comentar</button>
                            <input type="number" name="txtIdProducto" value="<?php echo $_GET['idp'] ?>" style="display: none;">
                        </div>
                      </form>
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