<?php
  function shiro_enqueue_styles()
  {
    # css files
    wp_enqueue_style( "shiro_css", get_template_directory_uri() . '/css/shiro.css' );
    wp_enqueue_style( "main_css", get_template_directory_uri() . '/style.css');
    wp_enqueue_style( "bs-css",  'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    # js files
    wp_enqueue_script( "bs-jquery", 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( "bs-popper", 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' );
    wp_enqueue_script( "bs-js", 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
    wp_enqueue_script( "shiro_script", get_template_directory_uri() . '/js/shiro.js', true);
  }
  add_action('wp_enqueue_scripts', 'shiro_enqueue_styles');

  function shiro_theme_setup()
  {
    # code...
      add_theme_support("menus");

      register_nav_menu("primary", "Primary Header Navigation");
      register_nav_menu("secondary", "Footer Navigation");
  }
  add_action("init", "shiro_theme_setup");

 ?>
