//takeout all components from uikit 2
add_action( 'beans_uikit_enqueue_scripts', 'take_out_uikit_two', 15 );

function take_out_uikit_two() { beans_uikit_dequeue_components( array( 'base', 'block', 'grid', 'article', 'comment', 'panel', 'nav', 'navbar', 'subnav', 'table', 'breadcrumb', 'pagination', 'list', 'form', 'button', 'badge', 'alert', 'dropdown', 'offcanvas', 'text', 'utility', 'icon' ), 'core' );

}
//add style sheet
function beans_child_enqueue_assets() {

wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

wp_enqueue_style( 'uikit-3', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css' );
wp_enqueue_script ( 'uikit-js',  '//getuikit.com/assets/uikit/dist/js/uikit.js?nc=5894', array(), '1', true  );
	wp_enqueue_style ( 'rock-salt',  '//fonts.googleapis.com/css?family=Rock+Salt', array(), '1'  );
	wp_enqueue_script('uikit-3-js', 'getuikit.com/assets/uikit/dist/js/uikit.js?nc=5894', array(), 'version', true ); // placed before body close tag
	wp_enqueue_script('uikit-3-icon-js', get_stylesheet_directory_uri().'/js/uikit-icons.min.js', array(), 'version', true ); // placed before body close tag
}

// add footer
wp_nav_menu( array(
    'menu' => 'Footer Menu',
    'menu_class' => 'uk-subnav uk-subnav-line',
    'container' => 'div',
    'container_class' => 'uk-align-medium-right', // Or custom tm-align-large-right class.
    'theme_location' => 'footer-menu',
    'beans_type' => 'navbar'
) );
// Remove the breadcrumb.
add_filter( 'beans_pre_load_fragment_breadcrumb', '__return_true' );

//declare support to woocommerce
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
