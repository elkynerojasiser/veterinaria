
function listarPersonas() {
    $.ajax({
        url: '/api/personas-list',
        type: 'GET',
        dataType: 'json',
        success : function(res) {
            console.log(res);
            $('#tabla-personas tbody').remove();
            var cuerpo = document.createElement("tbody");
            $.each(res.personas,function(i,field){
                var fila = document.createElement("tr");

                var cedula = document.createElement("td");
                var textoCedula = document.createTextNode(field.cedula);
                cedula.appendChild(textoCedula);

                var nombre = document.createElement("td");
                var textoNombre = document.createTextNode(field.nombre);
                nombre.appendChild(textoNombre);

                var apellido = document.createElement("td");
                var textoApellido = document.createTextNode(field.apellido);
                apellido.appendChild(textoApellido);

                var direccion = document.createElement("td");
                var textoDireccion = document.createTextNode(field.direccion);
                direccion.appendChild(textoDireccion);

                var telefono = document.createElement("td");
                var textoTelefono = document.createTextNode(field.telefono);
                telefono.appendChild(textoTelefono);

                fila.appendChild(cedula);
                fila.appendChild(nombre);
                fila.appendChild(apellido);
                fila.appendChild(direccion);
                fila.appendChild(telefono);
                cuerpo.appendChild(fila);
            });

            var tabla = document.getElementById('tabla-personas');
            tabla.appendChild(cuerpo);
        },
        error : function(error) {
            console.log(error);
        }
    })
}

/* Evento click de botón prueba */

$('#btn-cargar').on('click',function(){
    listarPersonas();
})
