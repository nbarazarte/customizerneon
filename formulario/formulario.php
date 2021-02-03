<!--<form id="customizerNeon">-->
  <div class="card border-light mb-3">
    <div class="card-header">

      <span style="font-size: 28px; color: #870D00;">
        <i class="fas fa-spray-can"></i>
      </span>

      Personaliza tu rótulo
    </div>
    <div class="card-body">

      <div class="col-12 text-center">

        <button style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn"> <i class="fas fa-magic"></i> Aplicar cambios</button>

      </div>

      <br/>

      <div id="myDIV">
        <div class="d-flex justify-content-center">
          <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>

      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> <?php echo esc_html($cn_precio_base);?> &euro;<strong></small>
        </h1>
        <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <div id="caja">
          <div class="neon_effect axaxax amarillo">
            <p>Metalarte</p>
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