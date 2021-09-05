<?php
/*
  Plugin Name: Run PHP file in Post & Page
 */
 
  function php_include( $attr ) {
    $file = $attr['file'];
    $upload_dir = wp_upload_dir();
    $folder = $upload_dir['basedir'] . '/php-content'. "/$file.php";
    ob_start();
    include ( $folder );
    return ob_get_clean();
}
add_shortcode( 'phpcode', 'php_include' );
?>