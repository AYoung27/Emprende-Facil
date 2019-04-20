function cargarDiv(divID, ruta) {
  $.ajax({
    url: ruta,
    dataType: 'text',
    success: function (respuesta) {
      document.getElementById(divID).innerHTML = respuesta;
      listar('');
      $.getScript('Estilos/js/script.js');
      mostrarResultados();
    },
    error: function () {
    },
  });
}



function mostrarResultados(year,grafico) {
  /*GRAFICO DE BARRA*/  
  if (grafico==1) {
    $('.resultados').html('<canvas id="grafico"></canvas>');
    $.ajax({
      type: 'POST',
      url: 'Acciones/ProcesarGrafico.php',
      data: 'year='+year,
      dataType: 'JSON',
      success: function (response) {
        var Datos = {
          labels: [
          'Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Mayo',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Octubre',
          'Noviembre',
          'Diciembre'
          ],
          datasets: [
          {
            fillColor: 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
            strokeColor: 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
            highlightFill: 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
            highlightStroke: 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
            data: response
          }
          ]
        }
        var contexto = document.getElementById('grafico').getContext('2d');
        window.Barra = new Chart(contexto).Bar(Datos, {
          responsive: true
        });
        Barra.clear();
      }
    });
    return false;
  }

  /*GRAFICO DE RADAR*/

  if (grafico==2) {
    $('.resultados').html('<canvas id="grafico"></canvas>');
    $.ajax({
      type: 'POST',
      url: 'Acciones/ProcesarGrafico.php',
      data: 'year='+year,
      dataType: 'JSON',
      success: function (response) {
        var Datos = {
          labels: [
          'Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Mayo',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Octubre',
          'Noviembre',
          'Diciembre'
          ],
          datasets: [
          {
            fillColor: 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
            strokeColor: 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
            highlightFill: 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
            highlightStroke: 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
            data: response
          }
          ]
        }
        var contexto = document.getElementById('grafico').getContext('2d');
        window.Barra = new Chart(contexto).Radar(Datos, {
          responsive: true
        });
        Barra.clear();
      }
    });
    return false;
  }

  /*GRAFICO DE LINEAL*/ 
  if (grafico==3) {
    $('.resultados').html('<canvas id="grafico"></canvas>');
    $.ajax({
      type: 'POST',
      url: 'Acciones/ProcesarGrafico.php',
      data: 'year='+year,
      dataType: 'JSON',
      success: function (response) {
        var Datos = {
          labels: [
          'Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Mayo',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Octubre',
          'Noviembre',
          'Diciembre'
          ],
          datasets: [
          {
            fillColor: 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
            strokeColor: 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
            highlightFill: 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
            highlightStroke: 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
            data: response
          }
          ]
        }
        var contexto = document.getElementById('grafico').getContext('2d');
        window.Barra = new Chart(contexto).Line(Datos, {
          responsive: true
        });
        Barra.clear();
      }
    });
    return false;
  }

  



} /*fin de la funcion para mostrar diferentes graficos*/

/*function listar(valor){
  $.ajax({
    url:'Acciones/busquedaDatosProducto.php',
    type:'POST',
    data:'val='+valor
  }).done(function(resp){
        //alert(resp);
        var valores = eval(resp);
        html="<table class='table table-bordered'><thead><tr><th>Nombre Producto</th><th>Precio</th><th>Opciones</th></thead><tbody>";
        for(i=0;i<valores.length;i++){
          html+="<tr><td>"+valores[i][0]+"</td><td>"+valores[i][1]+'</td><td><button type='+'"button"'+'class='+'"btn btn-success mr-2"'+" "+'data-toggle='+'"modal"'+" "+' data-target='+'"#modalM"'+'><i class='+'"glyphicon glyphicon-pencil"'+'></i> Modificar</button><button class='+'"btn btn-danger"'+'><i class='+'"glyphicon glyphicon-remove"'+'></i> Eliminar</button></td></tr>';
        }
        html+="</tbody></table>";
        $("#Producto").html(html);
      });
}*/

function listar(consulta){
  $.ajax({
    url:'Acciones/busquedaDatosProducto.php',
    type:'POST',
    dataType:'html',
    data:{consulta: consulta}
  }).done(function(respuesta){
    $("#Producto").html(respuesta);
  })
}

function eliminar(idProducto){
  if (confirm("Realmente desea eliminar el preducto?")) {
    window.location.href= "Acciones/eliminarDatosProducto.php?idProducto="+idProducto;
  }
}

function modificar(idProducto){
  $.ajax({
    url:"Acciones/modificarDatosProducto.php",
    type:'POST',
    data:'idProducto='+idProducto
  }).done(function(resp){

  });
}

function addCarrito(id){
  $.ajax({
    url:'Acciones/agregarACarrito.php',
    type:'POST',
    data:'id='+id
  }).done(function(resp){
    alert('Agregado con exito'+resp);
  }); 
}

function pagar(){
	$.ajax({
    url:'Acciones/pagarCarrito.php',
    type:'POST'
  	}).done(function(resp){
    	alert('Pagado'+resp);
  	});
}