<?php

define('THEMEROOT', get_stylesheet_directory_uri()); //현재 테마의 경로 
define('IMAGES', THEMEROOT.'/img'); //현재 테마의 경로 
define('JS', THEMEROOT.'/js'); //현재 테마의 경로 

if(!function_exists('alikerock_script')){

  function alikerock_script(){
    /* 스크립트 css 로드*/    
      wp_enqueue_style( 'my-theme', THEMEROOT.'/css/main.css');    
  }

  add_action( 'wp_enqueue_scripts', 'alikerock_script' );
}

if(!function_exists('alikerock_menu')){
  function alikerock_menu() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'alikerock_menu' );
}

add_theme_support( 'post-thumbnails' );