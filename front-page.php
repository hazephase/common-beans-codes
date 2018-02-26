<?php
/* Template Name: home page */

// Do all your page template modification here.
//add_action( 'beans_uikit_enqueue_scripts', 'example_view_enqueue_uikit_assets' );
/**
 * Enqueue UIkit assets.
 */
remove_all_actions( 'beans_post_body' );
beans_load_document();
