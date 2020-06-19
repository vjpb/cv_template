<!--
 * Template Name:  Header
 * 
 * This template works to conect all the files .css with WordPress using php code and add the header menu in all the pages. 
 *
 * @CV-Template
 * @since version 1.0 -->

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/default.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/layout.css">
   <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/media-queries.css">
   <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
   <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.png" >
   
   <?php wp_head();?>

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
            Show navigation
         </a>
	      <a class="mobile-btn" href="#" title="Hide navigation">
            Hide navigation
         </a>

         <ul id="nav" class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->