<!--<form id="customizerNeon">-->
  <div class="card border-light mb-3">
    <div class="card-header">

      <span style="font-size: 28px; color: #870D00;">
        <i class="fas fa-spray-can"></i>
      </span>

      Letras de neon personalizadas
    </div>
    <div class="card-body">

      <canvas id="myCanvas"  style="border:1px solid #d3d3d3; width: 100%; height: 100%">
      Your browser does not support the canvas element.
      </canvas>

      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> <?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
        </h1>
        <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <div id="caja">
          <div class="neon_effect axaxax amarillo">
            <p>Metalarte</p>
          </div>
       </div>

      </div>
      
      <div class="col-12 text-center">

        <button id="myButton" style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn"> 
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </button>

       <div id="myDIV">

        <div class="d-flex justify-content-center">

          <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
         
        </div>
      </div>        

      </div>

      <br/>

        <?php

          require 'opciones.php';

          require 'formaContorno.php';

          require 'traseraNeon.php';

          require 'sujecionNeon.php';

          require 'dimmer.php';

          require 'colores.php';

        ?>
      
    </div>
  </div>
<!--</form>-->