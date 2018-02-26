//takeout all components from uikit 2
add_action( 'beans_uikit_enqueue_scripts', 'take_out_uikit_two', 15 );

function take_out_uikit_two() { beans_uikit_dequeue_components( array( 'base', 'block', 'grid', 'article', 'comment', 'panel', 'nav', 'navbar', 'subnav', 'table', 'breadcrumb', 'pagination', 'list', 'form', 'button', 'badge', 'alert', 'dropdown', 'offcanvas', 'text', 'utility', 'icon' ), 'core' );

}
//add style sheet
function beans_child_enqueue_assets() {

wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

wp_enqueue_style( 'uikit-3', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css' ); }

// add footer
wp_nav_menu( array( 
    'menu' => 'Footer Menu',
    'menu_class' => 'uk-subnav uk-subnav-line',
    'container' => 'div',
    'container_class' => 'uk-align-medium-right', // Or custom tm-align-large-right class.
    'theme_location' => 'footer-menu',
    'beans_type' => 'navbar'
) ); 
