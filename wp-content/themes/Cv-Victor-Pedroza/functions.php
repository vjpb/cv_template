<?php 

/**This template works to add menu in the dashboard, widget for social icons and title tag.
.
 *
 * @cv-Template
 * @since version 1.0 
*/


/**
* Header menu 
*/
  function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));


    }
    add_action( 'init', 'register_my_menu' );
/**
* Widget social icons 
*/
    if (function_exists('register_sidebar')) {
      register_sidebar(array(
      'name' => 'Footer Menu',
      'id'   => 'footer_menu',
      'description'   => 'Widget Area',
  
      ));
      }
      add_theme_support( 'title-tag' );

?>