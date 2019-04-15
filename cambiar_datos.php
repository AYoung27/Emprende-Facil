<?php 
    session_start();
    if (empty($_SESSION)) {
        header('Location: index.php');
    }
 ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emprende Facil</title>
            <link rel="icon" type="png" href="img/png/041-online-shop.png">
        <link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
        <link rel="stylesheet" href="Estilos/css/bootstrap.css">
        <link rel="stylesheet" href="Estilos/css/perfil.css">
        
    <script src="Estilos/js/jq_search/jquery.js"></script>
    <script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

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
                                            <a class=\"dropdown-item\" href=\"Acciones/cerrarSesion.php\">Salir</a>
                                        </div>
                                    </div>";
                        }
                    ?>
                </form>
            </div>
        </nav>
    </header>
    <!-- Contenido de la página -->
    <div class="container mt-4">
        <div class="row">
            <!--Zona #1 Reservada para navegación del usuario-->
                    <div class="col-md-3">
                        <div class="col-md-12" align="center">
                            <img src="img/png/014-support.png" width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover">
                        </div>
                        <div class="col-md-12">
                            <p class="text-center"><strong>Usuario</strong></p>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group">
                                <a href="perfil.php" class="list-group-item ">Perfil</a>
                                <a href="#" class="list-group-item list-group-item-info"    >Inventario</a>
                                <a href="pedidos.php" class="list-group-item "  >Pedidos</a>
                                <a href="estadisticas.php" class="list-group-item"  >Estadística</a>
                                <a href="historial_compra.php" class="list-group-item"  >Historial de Compra</a>
                            </ul>
                        </div>
                    </div>

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
                <form name="modifyProfile" id="profileForm" novalidate>
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                	<div class="col-md-8 col-md-offset-2">
    	                
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                        	<br >
    	                            <label>Información básica</label>
    	                            <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
    	                            </span>
    	                            <br >
    	                            <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
    	                            </span>
    	                            <br >
    	                            <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
    	                            </span>
    	                            <br >
    	                            <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
    	                            </span>
    	                            <p class="help-block"></p>
    	                        </div>
    	                    </div>
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                            <label>Biografía:</label>
    	                            <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
    		                            data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
    		                        </span>
    		                        <br >
    		                        <span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <select class="form-control" id="selectLanguage" title="Seleccione su idioma">
    		                            	<option class="bs-title-option" value="" disabled selected>Elija un idioma</option>
    		                            	<option>Alemán</option>
    		                            	<option>Castellano</option>
    		                            	<option>Catalán</option>
		                            	   	<option>Francés</option>
    		                            	<option>Inglés</option>
    		                            	<option>Portugués</option>
    		                            </select>
    		                        </span>
                                    <br >
    	                        </div>
                        	</div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->

                <!-- Parte central - enlaces -->
                <div class="col-md-12" style="border: 1px solid lightgrey; background: #e5eaf2;">
                   	<!-- Parte de redes sociales en el alta de perfil -->
                   	<div class="col-md-8 col-md-offset-2">
    	            	<div class="control-group form-group">
                            <div class="controls">
                            	<br >
                                <label>Enlaces:</label>
                                <input type="text" class="form-control" id="txtMyWeb" placeholder="Introduzca su web personal o profesional">
                                <br>
                                <div class="input-group">
                                	<span class="input-group-addon">https://plus.google.com</span><input type="text" class="form-control" id="txtPlus" placeholder="Introduzca su usuario de Google+">
                                </div>
                                <br>
                                <div class="input-group">
                                	<span class="input-group-addon">http://twitter.com</span><input type="text" class="form-control" id="txtTwitter" placeholder="Introduzca su usuario de Twitter">
                                </div>
                                <br>
                                <div class="input-group">
                                	<span class="input-group-addon">https://www.facebook.com</span><input type="text" class="form-control" id="txtFacebook" placeholder="Introduzca su usuario de Facebook">
                                </div>
                                <br>
                                <div class="input-group">
                                	<span class="input-group-addon">https://www.linkedin.com</span><input type="text" class="form-control" id="txtLinkedin" placeholder="Introduzca su usuario de Linkedin">
                                </div>
                                <br >
                            </div>
                        </div>
                    </div>
                    <!-- Fin Parte de redes sociales en el alta de perfil -->
                    
                    <!-- Botones formulario -->
                	<div class="col-md-12 container allFormButtons">
                		<br >
    	               	<div class="col-md-2 col-md-offset-2">
                            <div class="form-group">
    	                	  <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
                            </div>
    		            </div>
    	                <div class="col-md-5 col-md-offset-3">
                            <div class="form-group">
        		               	<button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
        		              	<button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        &nbsp;
    	            </div>
                   	<!-- Fin botones formulario -->
                </div>
                <!-- Fin Parte central - enlaces -->
            </form>
            <!-- Fin del form -->
            </div>  
            <!-- Fin del div de parte central -->
        </div>
        <!-- Fin Campos del formulario de contacto con validación de campos -->
        &nbsp;
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 footer-align">
                    <p>Copyright &copy; <a href="http://www.fmunifer.com">WWW.FMUNIFER.COM</a> 2016. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
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
</body>

</html>
