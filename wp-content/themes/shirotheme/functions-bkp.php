<?php
  function shiro_enqueue_styles()
  {
    # code...
    wp_enqueue_style( "shiro-css", get_template_directory() . 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false);
  }
  add_action('wp_enqueue_scripts', 'shiro_enqueue_styles');
 ?>
