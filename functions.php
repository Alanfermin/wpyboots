<?php
//Aquí creo mi menú

if (function_exists('register_nav_menus')) {
	register_nav_menus (array('superior' => 'Menú Principal'));
}


//Aqui creo una clase para <a>
	add_filter( 'nav_menu_link_attributes', 'clase_menu_invento', 10, 3);

	function clase_menu_invento ($atts, $item, $args)

	{
		$class = 'nav-link';
		$atts['class'] = $class;
		return $atts;
	} 

//agregando las imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
 }

//Agregando sidebar a functions

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */


    //Para que sea compatible con el woocommerce
function my_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
 
function my_before_main_content() {
    echo '<!-- Starting content wrapper for your theme -->';
    echo '<div class="container"><div class="row"><div class="col-sm-12">';
}
add_action( 'woocommerce_before_main_content', 'my_before_main_content' );
 
function my_after_main_content() {
    echo '</div></div></div>';
    echo '<!-- Ending content wrapper for your theme -->';
}
add_action( 'woocommerce_after_main_content', 'my_after_main_content' );

// Eliminar los CSS de WooCommerce uno por uno
add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );
function woocommerce_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] ); // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}


// Anula la especificación predeterminada del tema para el producto # por fila
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}





}


?>

