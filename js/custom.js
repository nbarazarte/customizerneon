function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    var rotulo = document.getElementById('rotulo').value
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var fuenteLetrasText = y[x].text;
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

    //Texto
    var cadena = rotulo;
    var canvas = document.getElementById("myCanvas");
 
    /*
    var clase1 = "neon_effect";
    var clase2 = color;
    var clase3 = fuenteLetras;

    canvas.classList.add(clase1);
    canvas.classList.add(clase2);
    canvas.classList.add(clase3);
    */

    var ctx = canvas.getContext("2d");
    var posInicial = { x: 10, y: 50 };

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    //calculamos el alto en píxeles (el alto viene en cm):
    var altopx = alto * 300 * 0.393701;

    ctx.font = altopx+"px "+fuenteLetrasText;
    ctx.fillText(cadena, posInicial.x, posInicial.y);

    //Obtenemos el acho en píxeles:
    var ancho = ctx.measureText(cadena).width;

    //calculamos el alto en centímetros:
    var anchocm = ancho/300/0.393701;
    //console.log('Alto:', altopx, 'píxeles.');
    //console.log('Ancho:', ancho, 'píxeles.');
    //console.log('Ancho:', anchocm, 'centímetros.');

    //Seteamos el ancho:
    document.getElementById("ancho").value = anchocm.toFixed(3);

    var protocolo = window.location.protocol;
    var hostname = window.location.hostname;
    var carpeta = window.location.pathname;
    //console.log(carpeta);
    var str = carpeta;
    var res = str.split("/");
    //console.log(res[1]);

    var url = protocolo +'//'+ hostname;

    if(hostname == 'localhost'){

        var ruta = url + "/"+res[1]+"/wp-admin/admin-ajax.php";

    }else{

        var ruta = url + "/wp-admin/admin-ajax.php";
    }

     //document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myButton").style.display = 'none';

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){
            //document.getElementById("myDIV").style.display = "none";
            document.getElementById("myDIV").style.display = "none";
            document.getElementById("myButton").style.display = "inline";
        }
       
        document.getElementById('response').innerHTML = response;
       
    });

}

/*
window.addEventListener("load", function() {
  //Texto
  var cadena = prompt('Dibuja aquí lo que desees', '');
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var posInicial = { x: 10, y: 50 };

  ctx.font = "30px Arial";
  ctx.fillText(cadena, posInicial.x, posInicial.y);

  //Obtenemos el acho:
  var ancho = ctx.measureText(cadena).width;
  console.log('Ancho:', ancho, 'píxeles.');

});
*/

