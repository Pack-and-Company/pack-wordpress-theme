<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container">

  <div id="header">
    <img src="<?=get_template_directory_uri();?>/images/header.jpg" />
  </div>

  <div id="content">
