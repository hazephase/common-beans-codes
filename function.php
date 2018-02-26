//takeout all components from uikit 2
add_action( 'beans_uikit_enqueue_scripts', 'take_out_uikit_two', 15 );

function take_out_uikit_two() { beans_uikit_dequeue_components( array( 'base', 'block', 'grid', 'article', 'comment', 'panel', 'nav', 'navbar', 'subnav', 'table', 'breadcrumb', 'pagination', 'list', 'form', 'button', 'badge', 'alert', 'dropdown', 'offcanvas', 'text', 'utility', 'icon' ), 'core' );

}
//add 
function beans_child_enqueue_assets() {

wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

wp_enqueue_style( 'uikit-3', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css' ); }
