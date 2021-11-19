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

/* Petición a ruta api */

// function prueba() {
//     $.ajax({
//         url: '/api/prueba',
//         type: 'GET',
//         dataType: 'json',
//         success : function(res) {
//             alert(res.mensaje);
//         },
//         error : function(error) {
//             console.log(error);
//         }
//     })
// }

function prueba() {
    $.ajax({
        url: '/api/personas',
        type: 'GET',
        dataType: 'json',
        success : function(res) {
            console.log(res);
        },
        error : function(error) {
            console.log(error);
        }
    })
}

/* Evento click de botón prueba */

$('#btn-prueba').on('click',function(){
    prueba();
})