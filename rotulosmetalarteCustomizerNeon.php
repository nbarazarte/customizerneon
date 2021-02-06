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

//Archivos css y js propios del plugin:
include(plugin_dir_url(__FILE__).'funciones.php');

// Register Style
function custom_styles() {

    wp_register_style( 'dv-custom', plugin_dir_url(__FILE__).'css/custom.css', false, '1.0' );
    wp_enqueue_style( 'dv-custom' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles',10 );

// Register Script
function custom_scripts() {

    wp_register_script( 'main', plugin_dir_url(__FILE__).'js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options' );

function cn_set_default_options() {

    // Revisar si ya se habia activado antes

    if ( get_option( 'cn_pagina' ) === false ) {
        add_option( 'cn_pagina', 'Ninguna' );
    }

    if ( get_option( 'cn_precio_base' ) === false ) {
        add_option( 'cn_precio_base', '23.70' );
    }

    if ( get_option( 'cn_precio_dimmer' ) === false ) {
        add_option( 'cn_precio_dimmer', '5.00' );
    }

    if ( get_option( 'cn_precio_metacrilato' ) === false ) {
        add_option( 'cn_precio_metacrilato', '0.0032' );
    }

    if ( get_option( 'cn_precio_dm' ) === false ) {
        add_option( 'cn_precio_dm', '0.0020' );
    }

    if ( get_option( 'cn_precio_pvc' ) === false ) {
        add_option( 'cn_precio_pvc', '0.0035' );
    }

    if ( get_option( 'cn_precio_contraenchapado' ) === false ) {
        add_option( 'cn_precio_contraenchapado', '0.0052' );
    }

    if ( get_option( 'cn_precio_maderadepino' ) === false ) {
        add_option( 'cn_precio_maderadepino', '0.0052' );
    }

    if ( get_option( 'cn_precio_ancladoalapared' ) === false ) {
        add_option( 'cn_precio_ancladoalapared', '20.00' );
    }

    if ( get_option( 'cn_precio_colgadoaltecho' ) === false ) {
        add_option( 'cn_precio_colgadoaltecho', '20.00' );
    }

    if ( get_option( 'cn_precio_colgadocomouncuadro' ) === false ) {
        add_option( 'cn_precio_colgadocomouncuadro', '20.00' );
    }

    if ( get_option( 'cn_precio_sinsujecion' ) === false ) {
        add_option( 'cn_precio_sinsujecion', '10.00' );
    }

    if ( get_option( 'cn_precio_sietediaslaborales' ) === false ) {
        add_option( 'cn_precio_sietediaslaborales', '00.00' );
    }

    if ( get_option( 'cn_precio_4872' ) === false ) {
        add_option( 'cn_precio_4872', '50.00' );
    }

}

#Agregar esta condiguración al menu
function cn_menu_ajustes() {
    add_options_page( 'Customizer Neon', //Título de la página
                      'Customizer Neon', //Nombre del menú
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga', // slug
                      'cn_genera_pagina' ); //Función que procesará todo
}

add_action( 'admin_menu', 'cn_menu_ajustes' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_pagina                      = get_option( 'cn_pagina' ) ;
  $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
  $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
  $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
  $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
  $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
  $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
  $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
  $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
  $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
  $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
  $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
  $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
  $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;

  require('formularioAdmin/configuracionesForm.php');
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
    $cn_pagina                      = sanitize_text_field( $_POST['cn_pagina'] );
    $cn_precio_base                 = sanitize_text_field( $_POST['cn_precio_base'] );
    $cn_precio_dimmer               = sanitize_text_field( $_POST['cn_precio_dimmer'] );
    $cn_precio_metacrilato          = sanitize_text_field( $_POST['cn_precio_metacrilato'] );
    $cn_precio_dm                   = sanitize_text_field( $_POST['cn_precio_dm'] );
    $cn_precio_pvc                  = sanitize_text_field( $_POST['cn_precio_pvc'] );
    $cn_precio_contraenchapado      = sanitize_text_field( $_POST['cn_precio_contraenchapado'] );
    $cn_precio_maderadepino         = sanitize_text_field( $_POST['cn_precio_maderadepino'] );
    $cn_precio_ancladoalapared      = sanitize_text_field( $_POST['cn_precio_ancladoalapared'] );
    $cn_precio_colgadoaltecho       = sanitize_text_field( $_POST['cn_precio_colgadoaltecho'] );
    $cn_precio_colgadocomouncuadro  = sanitize_text_field( $_POST['cn_precio_colgadocomouncuadro'] );
    $cn_precio_sinsujecion          = sanitize_text_field( $_POST['cn_precio_sinsujecion'] );
    $cn_precio_sietediaslaborales   = sanitize_text_field( $_POST['cn_precio_sietediaslaborales'] );
    $cn_precio_4872                 = sanitize_text_field( $_POST['cn_precio_4872'] );

    // Guardar en la base de datos
    update_option( 'cn_pagina', $cn_pagina );
    update_option( 'cn_precio_base', $cn_precio_base );
    update_option( 'cn_precio_dimmer', $cn_precio_dimmer );
    update_option( 'cn_precio_metacrilato', $cn_precio_metacrilato );
    update_option( 'cn_precio_dm', $cn_precio_dm );
    update_option( 'cn_precio_pvc', $cn_precio_pvc );
    update_option( 'cn_precio_contraenchapado', $cn_precio_contraenchapado );
    update_option( 'cn_precio_maderadepino', $cn_precio_maderadepino );
    update_option( 'cn_precio_ancladoalapared', $cn_precio_ancladoalapared );
    update_option( 'cn_precio_colgadoaltecho', $cn_precio_colgadoaltecho );
    update_option( 'cn_precio_colgadocomouncuadro', $cn_precio_colgadocomouncuadro );
    update_option( 'cn_precio_sinsujecion', $cn_precio_sinsujecion );
    update_option( 'cn_precio_sietediaslaborales', $cn_precio_sietediaslaborales );
    update_option( 'cn_precio_4872', $cn_precio_4872 );

    // Regresamos a la pagina de ajustes
    wp_redirect(

      add_query_arg (
        'page',
        'cn-conf-ga',
        admin_url( 'options-general.php' )
      )
    );
    exit;
}

//Crear un filtro para modificar el contenido del articulo....
add_filter( 'the_content', 'cn_agregar_anuncio' );

function cn_agregar_anuncio ( $the_content ) {

    global $wpdb;

    $cn_pagina = get_option( 'cn_pagina' ) ;

    $sql = "SELECT id FROM {$wpdb->prefix}posts WHERE post_title = '".$cn_pagina."' ";
    $results = $wpdb->get_results( $sql, OBJECT );

    foreach ($results as $key ) {

      $id_pagina[] = $key->id;

    }
    //echo "--->".$id_pagina[0];
    //die();

    $pagina = $id_pagina[0];

    if(!empty($pagina) ){


    //Creamos una variable que contenga todo el contenido
    //del articulo
    //$articulo = $the_content;

    //Solo inyectar el anuncio en los articulos
    //if (is_singular() && is_main_query() && in_the_loop()){
    //if (is_page() && is_main_query() && in_the_loop()){
    //if (is_home() && is_main_query() && in_the_loop()){
    if (is_page($pagina) && is_main_query() && in_the_loop()){
      // Al final del articulo agregar el codigo del anuncio....
      //$articulo .= '<div class="ads"> *** Aquí va el formulario *** </div>';


      // Conseguir el valor del Precio base de todos los elementos:
      $cn_pagina                      = get_option( 'cn_pagina' ) ;
      $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
      $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
      $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
      $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
      $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
      $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
      $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
      $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
      $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
      $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
      $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
      $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
      $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;

      require('formularioCustomizer.php');
    }


  }
    // siempre debe regresar el contenido que se desea mostrar
    //return $articulo;
    return;

    wp_die();
}

add_action('wp_ajax_jnjtest', 'jnj_mi_funcion');
add_action('wp_ajax_nopriv_jnjtest', 'jnj_mi_funcion');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion()
{

  /*global $wpdb;
  //echo '<pre style="color: #fff">'; print_r($_POST); echo '</pre>';
  //$sql = "SELECT * FROM {$wpdb->prefix}options WHERE option_name = 'cn_precio_base'";
  $sql = "SELECT option_name, option_value FROM {$wpdb->prefix}options WHERE option_name LIKE '%cn_precio%'";
  $results = $wpdb->get_results( $sql, OBJECT );

  foreach ($results as $key => $valor) {

    $res[$valor->option_name] = $valor->option_value;

  }*/

    //echo '<pre>'.print_r($res).'</pre><br/>';
    //echo "Precio Base: ".$res['cn_precio_base']."<br/>";
      
    $traseraNeon      = $_POST['anchocm'] * $_POST['alto'] * $_POST['trasera'];
    $sujecionNeon     = $_POST['sujecionNeon'];
    $dimmerNeon       = $_POST['dimmerNeon'];
    $tiemposEntrega   = $_POST['tiemposEntrega'];
 
    $precio      = $traseraNeon + $sujecionNeon + $dimmerNeon + $tiemposEntrega;
    $precioFinal = $precio * 3.5;
/*
    echo "<b>Fuente de Letra: </b>". $_POST['fuenteLetrasText']."<br/>";
    echo "<b>Ancho:</b> ". number_format($_POST['anchocm'],2,",",".")." cm <br/>";
    echo "<b>Alto:</b> ".$_POST['alto']." cm <br/>";
    echo "<b>Trasera del Neon:</b> ".$_POST['tipoTrasera']." ".number_format($traseraNeon,2,",",".")."&euro;<br/>";
    echo "<b>Sujeción del Neon:</b> ".$_POST['tipoSujecion']." ".number_format($_POST['sujecionNeon'],2,",",".")."&euro;<br/>";
    echo "<b>Dimmer (controlador de luz):</b> ".number_format($_POST['dimmerNeon'],2,",",".")."&euro;<br/>";
    echo "<b>Tiempo de Entrega:</b> ".$_POST['tiemposEntregaText']." ".number_format($_POST['tiemposEntrega'],2,",",".")."&euro;<br/>";
    echo "<b>Forma del Contorno: </b>". $_POST['contorno']."<br/>";
    echo "<b>Color: </b>". $_POST['color']."<br/>";

*/
    $fuente = $_POST['fuenteLetras'];
    $color = $_POST['color'];

    echo '<h1>
      <small class="text-muted"> <strong>'. number_format($precioFinal,2,",","."). '&euro;<strong></small>
    </h1>
    <div style="font-size: 10px; color: #870D00">IVA incluido</div>
    <div style="font-size: 10px;">ENVÍO GRATUITO</div>';

    echo '<div id="caja">
            <div class="neon_effect '.$fuente.' '.$color.' ">
              <p>'.$_POST['rotulo'].'</p>
            </div>
          </div>';  

  wp_die();
}
