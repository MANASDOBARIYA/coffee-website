<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?> |<?php  if(is_front_page()){ bloginfo('description');}?></title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Grand Coffee</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo get_bloginfo('template_url'); ?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
      <?php wp_head(); ?>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body <?php body_class(); ?>>

      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo">
                  <?php 
                  $logoimg=get_header_image();
                  ?>
               
               <a href="index.html"><img src="<?php echo  $logoimg; ?>" width="50" height="50"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav" style="color:white;">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                     <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'navbar')) ?>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
</body>
</html>