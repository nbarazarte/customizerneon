"use strict";

// Función con JavaScript puro,,
function pureJavascriptDoSomethingAJAX() {
    var xhr = new XMLHttpRequest();

    // Enganchamos el evento cambio de estado de la conexión
    // para pintar la respuesta en el frontend..
    xhr.onreadystatechange = function (response) {
        if (xhr.readyState === 4) {
            console.log(response);
            console.log(xhr);
            document.getElementById('txt-for-request-content').innerHTML =
                'AJAX response with pure Javascript:<br>' + xhr.responseText;
        }
    };

    // Otra forma de preparar los parámetros de la petición AJAX,,
    /* var data = new FormData();
    data.append('action', 'jnjtest');
    //data.append('var1', 'value1');
    //data.append('var2', 'value2');*/

    // Aquí la ruta al endpoint que queremos atacar,,
    xhr.open('POST', 'localhost/rotulosmetalarte/wp-admin/admin-ajax.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.send('action=jnjtest');
    //xhr.send(data);
}

// Lo mismo que lo anterior pero con jQuery..
function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    var data = {
        'action': 'jnjtest',
        //'var1': 'value1',
        //'var2': 'value2',
    };

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post("localhost/rotulosmetalarte/wp-admin/admin-ajax.php", data, function (response) {
        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        console.log(response);
        document.getElementById('txt-for-request-content').innerHTML =
            'AJAX response with jQuery:<br>' + response;
    });
}

