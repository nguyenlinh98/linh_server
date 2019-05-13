
<?php
/**
 Embed link inc/init.php vao de load chuc nang
*/
 require dirname( __FILE__ ) . '/inc/init.php';
 /*
 * cac thiet lap lien qan den themes 
  */
/**
 * Các thiết lập liên quan đến theme
 */
function linhdev_theme_setup() {
    add_image_size( 'sanpham_thumb', 370, 300, false );
}
add_action('init', 'linhdev_theme_setup', 10);

 ?>
