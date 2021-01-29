// Lo mismo que lo anterior pero con jQuery..
function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    var data = {
        'action': 'jnjtest',
        //'var1': 'value1',
        //'var2': 'value2',
    };

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post("http://localhost/rotulosmetalarte/wp-admin/admin-ajax.php", data, function (response) {
        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        console.log(response);
        document.getElementById('response').innerHTML = response;
    });
}