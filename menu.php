<?php // Customize child theme
// Register new preheader Menu
function register_preheader_menu() {
 register_nav_menu( 'preheader-menu',__( 'Preheader Menu' ) );
 }
add_action( 'init', 'register_preheader_menu' );

// Add the new preheader menu - where it is to be located
 beans_add_smart_action( 'beans_header_append_markup', 'append_header_menu' );

function preheader_menu() {
   if ( has_nav_menu( 'preheader-menu' ) ) { // only show if the  location preheader-menu has a menu assigned
 wp_nav_menu( array(
 'menu' => 'Preheader Menu',
 'menu_class' => 'preheader-menu', // I added my own class to the menu.
 'container' => 'nav',
 'container_class' => 'uk-navbar uk-float-center',
 'theme_location' => 'preheader-menu',
 'beans_type' => 'navbar'
   ) );
   }
}
