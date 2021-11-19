/* Código para gestión de la imagen */

var imagen = document.getElementById('imagen');
    var input_imagen = document.getElementById('input_imagen');
    var text_imagen = document.getElementById('text_imagen');

    imagen.addEventListener('click', function() {
        input_imagen.click();
    });

    input_imagen.addEventListener('change', function() {
        var file = this.files[0];
        var sizebyte = this.files[0].size;
        var sizekilobyte = parseInt(sizebyte / 1024);
        if (sizekilobyte > 1024) {
            alert('La imagen excede el tamaño permitido de 1 MB');
        } else {
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById("imagen").src = reader.result;
                text_imagen.value = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });

/* -------------------------------------------------------------------------------*/

/* Función que envia los datos del formulario*/

function enviarFormulario() {
    $.ajax({
        url: '/api/personas',
        method: 'POST',
        dataType: 'json',
        data: {
            cedula : $("#cedula").val(),
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            direccion: $("#direccion").val(),
            telefono: $("#telefono").val()
        },
        success : function(res) {
            alert(res.mensaje);
        },
        error: function(errors){
            alert('Ocurrió un error al crear la persona');
        }
    })
}
/* -------------------------------------------------------------------------------*/

/* Evento click del botón crear */

$("#btn-crear").on("click",function(event){
    event.preventDefault();
    validarFormulario();
    if($("#form-crear-persona").valid()){
        enviarFormulario();
    }else{
        return;
    }
});

/* -------------------------------------------------------------------------------*/

/* Validación del formulario */

function validarFormulario(){
    $("#form-crear-persona").validate({
        rules: {
            cedula: {
                required: true,
                minlength: 3,
                maxlength: 10
            },
            nombre: {
                required: true
            },
            apellido: {
                required: true
            },
            direccion: {
                required: true
            },
            telefono: {
                required: true
            }
        },
        messages: {
            cedula: {
                required: 'El campo cédula es obligatorio',
                minlength: 'La cédula no alcanza la longitud mínima',
                maxlength: 'La cédula excede la longitud máxima'
            },
            nombre: {
                required: 'El campo nombre es obligatorio'
            },
            apellido: {
                required: 'El campo apellido es obligatorio'
            },
            direccion: {
                required: 'El campo dirección es obligatorio'
            },
            telefono: {
                required: 'El campo teléfono es obligatorio'
            }
        }
    })
}

/* -------------------------------------------------------------------------------*/
