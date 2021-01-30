<div class="card">
  <div class="card-header">

    <span style="font-size: 28px; color: #870D00;">
      <i class="fas fa-spray-can"></i>
    </span>


    Personaliza tu rótulo
  </div>
  <div class="card-body">

    <div class="col-12 text-center">
      <button style="color: #fff; background-color: #870D00"onclick="jQueryDoSomethingAJAX()" class="btn"> <i class="fas fa-magic"></i> Aplicar cambios</button>
    </div>

    <br/>

    <div id="response"></div>

    <br/>

      <?php

        require 'opciones.php';

        require 'formaContorno.php';

        require 'traseraNeon.php';

        require 'sujecionNeon.php';

        require 'dimmer.php';

        require 'colores.php';

      ?>

      <div class="col-12 text-center">
        <br/>
        <button style="color: #fff; background-color: #870D00"onclick="jQueryDoSomethingAJAX()" class="btn"> <i class="fas fa-magic"></i> Aplicar cambios</button>
      </div>
    
  </div>
</div>