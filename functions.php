<?php

/* if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'boostrap','select2','owl-carousel','stm-font-awesome-5','fancybox','lightbox','stm-theme-animate','stm-theme-icons','perfect-scrollbar','stm-theme-default-styles','stm-theme-default-styles','stm_megamenu' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 160 ); */



function thememonsite_setup() {
    // Ajout du support pour les images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajout du support pour le titre du site
    add_theme_support( 'title-tag' );
    // Ajout du support pour rendre le code valide en HTML 5
    add_theme_support( 
      'html5', 
      array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption',
        'style',
        'script'
      )
    );
    // Ajout du support pour les menus
    register_nav_menus( 
      array(
        'main' => 'Menu Principal',
        'footer' => 'Menu footer',
        'footer2' => 'Menu footer 2'
      )
    );
  }
  add_action( 'after_setup_theme', 'thememonsite_setup' );

add_action( 'wp_enqueue_scripts', 'stm_enqueue_parent_styles' );

function stm_enqueue_parent_styles() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('stm-theme-style') );
}