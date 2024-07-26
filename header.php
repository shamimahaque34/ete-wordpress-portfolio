<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">

<head>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow-x: hidden;
        }
    </style>

    <!-- Required meta tags link Start Here -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hello! I'm Shamima Haque. I'm a Web Developer">
    <meta name="author" content="Shamima Haque">
    <!-- Required meta tags link End Here -->





    <!--    Favicon link Start Here-->
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.png" type="image/x-icon" />
    <!--    Favicon link End Here-->



    <title>Shamima Haque</title>
    <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>

<!--Preloader Starts Here-->
<!-- <div id="loading"></div> -->
<!--Preloader Ends Here-->

<!--Header Starts Here-->
<header>
    <div id="main-menu" class="container main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo" href="<?php home_url('/');?>">
          <?php  $options = get_option( 'my_framework' );?>
        <img src="<?php echo $options['opt-upload-1']; ?>"  alt="" />
<!--       <h2>Shamima Haque</h2>-->
        </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php wp_nav_menu(array(
	'theme_location'=>'header_menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse menu',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
	));?>

  <!-- <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Portfolio</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
    </ul>
  </div> -->
</nav>
    </div>
</header>
<!--Header Ends Here-->

