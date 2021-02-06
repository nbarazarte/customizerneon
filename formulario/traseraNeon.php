<div class="card">

  <div class="card-header">
    Trasera del Neon
    <input type="hidden" id="tipoTrasera" name="tipoTrasera" readonly="yes" value="metacrilato">
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-10">

        <div class="card-group">

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/trasera/metacrilato.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoTrasera',this.id)" class="form-check-input" type="radio" name="traseraneon" id="metacrilato" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked>      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="metacrilato">                    
                    Metacrilato
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/trasera/pvc.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoTrasera',this.id)" class="form-check-input" type="radio" name="traseraneon" id="pvc" value="<?php echo esc_html($cn_precio_pvc);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="pvc">                    
                    PVC
                  </label>       
                </div>      

              </div>

            </div>
          </div>
          
          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/trasera/dm.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoTrasera',this.id)" class="form-check-input" type="radio" name="traseraneon" id="dm" value="<?php echo esc_html($cn_precio_dm);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="dm">                    
                    DM
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/trasera/contrachapado.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoTrasera',this.id)" class="form-check-input" type="radio" name="traseraneon" id="contrachapado" value="<?php echo esc_html($cn_precio_contraenchapado);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="contrachapado">                    
                    Contrachapado
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/trasera/maderadepino.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
             
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoTrasera',this.id)" class="form-check-input" type="radio" name="traseraneon" id="maderadepino" value="<?php echo esc_html($cn_precio_maderadepino);?>">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="maderadepino">                    
                    Madera de Pino
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