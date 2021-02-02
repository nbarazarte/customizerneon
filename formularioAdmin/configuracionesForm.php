<div class="wrap">

  <h2>Configuración de Customizer Neon</h2>

  <form method="post" action="admin-post.php">
    
    <input type="hidden" name="action"  value="guardar_ga" />

    <!-- mejorar la seguridad -->
    <?php wp_nonce_field('token_ga'); ?>

    Precio Base:
    
    <input type="text" name="cn_precio_base" value="<?php echo esc_html($cn_precio_base);?>"/>

     <br />

    <input type="submit" value="Guardar" class="button-primary"/>

  </form>

</div>