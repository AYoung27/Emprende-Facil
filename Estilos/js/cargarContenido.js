function cargarDiv(divID, ruta) {
  $.ajax({
    url: ruta,
    dataType: 'text',
    success: function (respuesta) {
      document.getElementById(divID).innerHTML = respuesta;
      listar('');
      $.getScript('Estilos/js/script.js');
      mostrarResultados('2000');
    },
    error: function () {
    },
  });
}

function mostrarResultados(year) {

  $('.resultados').html('<canvas id="grafico"></canvas>');
  $.ajax({
    type: 'POST',
    url: 'php/procesar.php',
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

function listar(valor){
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
      }