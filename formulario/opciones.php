<div class="row g-3">

  <div class="col-sm-8">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="rotulo" placeholder="Tu texto" value="Metalarte">
      <label for="rotulo">Escríbe tu texto aquí</label>
    </div>
  </div>

  <div class="col-sm-4">
    
    <select form="letras" class="form-select" id="letra">
      <option value="Tipos de letras" selected>Tipos de letras</option>
      <option style="font-family:'Axaxax W05 Regular';" value="axaxax">Axaxax W05 Regular</option>
      <option style="font-family:'neon_lightsregular';"value="neon-lights">neon_lightsregular</option>
      <option style="font-family:'Monoton';"value="monoton">Monoton</option>
    </select>
  </div>
  <br/><br/><br/>
</div>

<div class="row g-3">

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="alto" placeholder="Alto total texto cm" value="10">
      <label for="alto">Alto total texto cm</label>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="col-12 form-floating mb-3">
      <input type="text" class="form-control" id="ancho" placeholder="Ancho total texto cm" value="0" readonly="yes">
      <label for="ancho">Ancho total texto cm</label>
    </div>
  </div>

  <div class="col-sm-4">
    
    <select for="tiempos" class="form-select" id="tiempos">
      <option value="Tiempos de entrega" selected>Tiempos de entrega</option>
      <option value="<?php echo esc_html($cn_precio_sietediaslaborales);?>">7 días (laborales)</option>
      <option value="<?php echo esc_html($cn_precio_4872);?>">48 a 72 horas</option>
    </select>
  </div>

</div>

<br/>