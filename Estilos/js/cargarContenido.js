function cargarDiv(divID, ruta){
       $.ajax({
        url: ruta,
        dataType:"text",
        success:function(respuesta){
           document.getElementById(divID).innerHTML = respuesta;
        },
        error: function () {

        },						
        });
}

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}