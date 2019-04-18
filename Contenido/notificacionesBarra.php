<form class="form-inline ml-auto">
<?php
	session_start();
	include("../Clases/Conexion.php");
 	$conexion = new Conexion();
 	$conexion->mysql_set_charset("utf8");
	
	if (empty($_SESSION)){
		echo "<ul class=\"navbar-nav\">
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"registro.php\">Registrarse</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"login.php\">Iniciar Sesión</a>
				</li>
			</ul>";	
	} else {
			if ($_SESSION['Imagen'] == NULL || $_SESSION['Imagen'] == "") {
				$img = 'img/png/014-support.png';
			} else{
				$img = 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
			}
						echo "<ul class=\"navbar-nav\">
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"perfil.php\">Perfil
										<img class=\"img-circle img-thumbnail img-responsive\" height=\"20\" width=\"20\" src=\"".$img."\"/>
									</a>
								</li>
							</ul>";
	}

?>
	<div class="dropdown">
				<a class="btn ml-auto" href="pago.php">
					<span class="glyphicon glyphicon-shopping-cart"></span>
				</a>
	</div>
	<?php 
		if (!empty($_SESSION)) {
 			$consulta= sprintf("SELECT count(*) FROM tbl_notificacion where IDUsuario='%s' and Visto = '0'", $conexion->antiInyeccion($_SESSION['ID']));
 			$num = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['count(*)'];

 			
 			$consulta= sprintf("SELECT IDNotificacion, Descripcion, Redireccion FROM tbl_notificacion where IDUsuario='%s' and Visto = '0'", $conexion->antiInyeccion($_SESSION['ID']));
 			$resultado = $conexion->ejecutarconsulta($consulta);
			$iter = $conexion->cantidadRegistros($resultado);


			echo "<!--Menu desplegable #1-->
					<div class=\"dropdown\">
						<button id=\"btnDespegable_1\" class=\"btn\"  data-toggle=\"dropdown\" data-target = \"#divDesplegable_1\" >
							<span id=\"spnMenu\" class=\"glyphicon glyphicon-bell\"></span>";
			if ($num > 0) {
 				echo "<span class=\"qty\">".$num."</span>";
 				echo "		</button>
						<div id=\"divDesplegable_1\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">";

					for ($i=0; $i < $iter; $i++) {
						$data = $conexion->obtenerFila($resultado);
						echo '<a class="dropdown-item" href="'.$data['Redireccion'].'?idn='.$data['IDNotificacion'].'">'.$data['Descripcion'].'</a>';
					}
 			} else {
				echo "	</button>
						<div id=\"divDesplegable_1\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
							<a class=\"dropdown-item disabled\" href=\"#\">No hay notificaciones</a>
						";

 			}
							

			echo "		</div>
					</div>

					<!--Menu desplegable #2-->
					<div class=\"dropdown\">
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
<script type="text/javascript">
		$('#divDesplegable_1').on('show.bs.dropdown', function () {
  			alert('hello');
		})
	</script>
