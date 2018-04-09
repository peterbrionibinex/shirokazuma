<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo( 'name' );?></title>
</head>

<?php
    if (is_home()) {
      $shiro_classes = array('shiro-class', 'shiro');
    else {
      $shiro_classes = array('not-so-shiro-class', 'not-shiro');
    }
} ?>

<body <?php body_class(); ?>>
  <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
