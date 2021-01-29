<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title></title>
  </head>
  <body>


<style type="text/css">
  
  .tamanoLetras{
    font-size: 11.5px;
  }

</style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    


    <button onclick="pureJavascriptDoSomethingAJAX()">Send AJAX request to the server with pure Javascript</button>
    <button onclick="jQueryDoSomethingAJAX()">Send AJAX request to the server with jQuery</button>

    <div id="txt-for-request-content"></div>


    <?php
      require('formulario/formulario.php');
    ?>
    
<script type="text/javascript">
  

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


</script>


  </body>
</html>