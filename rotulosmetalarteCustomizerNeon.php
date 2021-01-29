<?php 
/* 
Plugin Name: Rotulos Metalarte Customizer Neon
Plugin URI: https://www.rotulosmetalarte.es
Description: Personalizador de anuncios de Neon
Version: 1.0 
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2 
*/


# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options' );

function cn_set_default_options() {
    // Revisar si ya se habia activado antes
    if ( get_option( 'cn_precio_base' ) === false ) {
        add_option( 'cn_precio_base', '23.70' );
    }
}

#Agregar esta condiguracion al menu

function cn_menu_ajustes() {
    add_options_page( 'Rotulos Metalarte Customizer Neon', //Titulo de la pagina
                      'Customizer Neon', //Nombre del menu
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga', // slug
                      'cn_genera_pagina' ); //Funcion que procesara todo
}

add_action( 'admin_menu', 'cn_menu_ajustes' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina() {
    // Conseguir el valor del Precio Base
    $cn_precio_base = get_option( 'cn_precio_base' ) ;

    ?>

    <div class="wrap">
    <h2>Configuración Customizer Neon</h2>

    <form method="post" action="admin-post.php">
      <input type="hidden" name="action"  value="guardar_ga" />

      <!-- mejorar la seguridad -->
      <?php wp_nonce_field('token_ga'); ?>

      Precio Base:
      
      <input type="text" name="cn_precio_base"
          value="<?php echo esc_html($cn_precio_base);
          ?>"/>

       <br />
      <input type="submit" value="Guardar" class="button-primary"/>
    </form>
    </div>
<?php
}

add_action( 'admin_post_guardar_ga', 'cn_guardar_ga' );

function cn_guardar_ga() {
    // Revisar el permiso de autorización
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $codigo_ga = sanitize_text_field( $_POST['codigo_ga'] );

    // Guardar en la base de datos
    update_option( 'cn_ga_cuenta', $codigo_ga );

    // Regresamos a la pagina de ajustes
    wp_redirect( add_query_arg( 'page',
                                'cn-conf-ga',
                            admin_url( 'options-general.php' ) ) );
    exit;
}


//Crear un filtro para modificar el contenido del articulo....
add_filter( 'the_content', 'cn_agregar_anuncio' );

function cn_agregar_anuncio ( $the_content ) {


    //Creamos una variable que contenga todo el contenido
    //del articulo
    //$articulo = $the_content;

    //Solo inyectar el anuncio en los articulos
    //if (is_singular() && is_main_query() && in_the_loop()){
    //if (is_page() && is_main_query() && in_the_loop()){
    //if (is_home() && is_main_query() && in_the_loop()){
    if (is_page(12) && is_main_query() && in_the_loop()){
      // Al final del articulo agregar el codigo del anuncio....
      //$articulo .= '<div class="ads"> *** Aquí va el formulario *** </div>';


 

      require('formularioCustomizer.php');
    }

    // siempre debe regresar el contenido que se desea mostrar
    //return $articulo;
    return;











add_action('wp_ajax_jnjtest', 'jnj_mi_funcion');
add_action('wp_ajax_nopriv_jnjtest', 'jnj_mi_funcion');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion()
{
    echo 'A response sent to the frontend, requested by the AJAX request done with JavaScript:<br>';
    echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt'
        .' ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'
        .' ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in'
        .' reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur'
        .' sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id'
        .' est laborum.<br>';
    wp_die();
}
// ..y claro, podremos definir tantas funciones como queramos. Además de que podemos
// parametrizar cada función y leer los valores pasados mediante JavaScript, leyéndolos con $_POST..














    
}