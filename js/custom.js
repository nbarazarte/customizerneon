function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    var rotulo = document.getElementById('rotulo').value
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    //var fuenteLetras = y[x].text;
    var fuenteLetras = y[x].value;

    var x = document.getElementById("tiempos").selectedIndex;
    var y = document.getElementById("tiempos").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    //var tiemposEntrega = y[x].text;
    var tiemposEntrega = y[x].value;

    var contornos = document.getElementsByName("contornos");
    var txt = "";
    var i;
    for (i = 0; i < contornos.length; i++) {
        if (contornos[i].checked) {
          txt = contornos[i].value;
        }
    }

    var contorno = txt;

    var traseraneon = document.getElementsByName("traseraneon");
    var txt = "";
    var i;
    for (i = 0; i < traseraneon.length; i++) {
        if (traseraneon[i].checked) {
          txt = traseraneon[i].value;
        }
    }

    var trasera = txt;

    var sujecion = document.getElementsByName("sujecion");
    var txt = "";
    var i;
    for (i = 0; i < sujecion.length; i++) {
        if (sujecion[i].checked) {
          txt = sujecion[i].value;
        }
    }

    var sujecionNeon = txt;

    var dimmer = document.getElementsByName("dimmer");
    var txt = "";
    var i;
    for (i = 0; i < dimmer.length; i++) {
        if (dimmer[i].checked) {
          txt = dimmer[i].value;
        }
    }

    var dimmerNeon = txt;       

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;

    var data = {
        'action': 'jnjtest',
        'rotulo': rotulo,
        'alto': alto,
        'ancho': ancho,    
        'fuenteLetras': fuenteLetras,
        'tiemposEntrega': tiemposEntrega,
        'contorno': contorno,
        'trasera': trasera,
        'sujecionNeon': sujecionNeon,
        'dimmerNeon': dimmerNeon,
        'color': color,
    };

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post("http://localhost/rotulosmetalarte/wp-admin/admin-ajax.php", data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        console.log(response);
        document.getElementById("myDIV").style.display = "inline";
        document.getElementById('response').innerHTML = response;
        document.getElementById("myDIV").style.display = "none";
    });
}