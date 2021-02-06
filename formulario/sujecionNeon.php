<div class="card">

  <div class="card-header">
    Sujeción del Neon
    <input type="hidden" id="tipoSujecion" name="tipoSujecion" readonly="yes" value="ancladoalapared">
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-8">

        <div class="card-group">

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/sujecion/ancladoalapared.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
               <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoSujecion',this.id)" class="form-check-input" type="radio" name="sujecion" id="ancladoalapared" value="<?php echo esc_html($cn_precio_ancladoalapared);?>" checked>      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="ancladoalapared">                    
                    Anclado a la pared
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/sujecion/colgadoaltecho.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
               <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoSujecion',this.id)" class="form-check-input" type="radio" name="sujecion" id="colgadoaltecho" value="<?php echo esc_html($cn_precio_colgadoaltecho);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="colgadoaltecho">                    
                    Colgado al techo
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/sujecion/colgadocomouncuadro.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
               <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoSujecion',this.id)" class="form-check-input" type="radio" name="sujecion" id="colgadocomouncuadro" value="<?php echo esc_html($cn_precio_colgadocomouncuadro);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="colgadocomouncuadro">                    
                    Colgado como un cuadro
                  </label>       
                </div>      

              </div>

            </div>
          </div>
          
          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/sujecion/sinsujecion.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
               <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoSujecion',this.id)" class="form-check-input" type="radio" name="sujecion" id="sinsujecion" value="<?php echo esc_html($cn_precio_sinsujecion);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="sinsujecion">                    
                    Sin sujeción
                  </label>       
                </div>      

              </div>

            </div>
          </div>

         </div>

      </div>

    </div>

  </div>

</div>

<br/>