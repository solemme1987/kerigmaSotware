<?php

add_action('init', '_register_kerigma_menus');
// add_action( 'init', '_register_taxonomies' );
// add_action( 'init', '_register_post_types' );


/**
 * A function to register menus
 *
 * @return void
 */

function _register_kerigma_menus()
{
  register_nav_menu('header-menu', __('Header Menu'));
  register_nav_menu('footer-menu', __('Footer Menu'));
}
