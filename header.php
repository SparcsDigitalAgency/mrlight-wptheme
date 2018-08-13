<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php  wp_head(); ?>

<!-- Stylesheets
         ============================================= -->
      
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-new.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-icons.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" />

      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      

</head>

<body <?php body_class(); ?> >
<div class="stretched">

	 <!-- Document Wrapper
         ============================================= -->
      <div id="wrapper" class="clearfix">
         <!-- Header
            ============================================= -->
         <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
            <div id="header-wrap">
               <div class="container clearfix">
                  <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                  <!-- Logo
                     ============================================= -->
                  <div id="logo">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mr light Logo"></a>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri(); ?>/images/logo-dark@2x.png"><img src="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png" alt="Canvas Logo"></a>
                  </div>
                  <!-- #logo end -->
                  <!-- Primary Navigation
                     ============================================= -->

             	<?php if ( has_nav_menu( 'top' ) ) : ?>
				
					
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					
				
				<?php endif; ?>
                  <!-- #primary-menu end -->
               </div>
            </div>
         </header>

<?php if ( is_front_page() ) : ?>
				
			
         <!-- #header end -->
         <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
            <div class="slider-parallax-inner">
               <div class="swiper-container swiper-parent">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/swiper/1.jpg');">
                        <div class="container clearfix">
                           <div class="slider-caption slider-caption-center">
                              <h2 data-caption-animate="fadeInUp">Welcome to Mr. Light</h2>
                              <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">FOR ALL IT TAKES TO MAKE A GOOD HOME, A GREAT ONE!</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                           <div class="slider-caption">
                              <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                              <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                  <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
               </div>
               <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
            </div>
         </section>


         <?php else : ?>


         	<section id="page-title" class="page-title-parallax newheader" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/page-title-bg.jpg'); background-position: bottom center; background-size: cover;">
            <div class="container clearfix heading-block1">
               

               <?php if ( have_posts() ) : ?>
                <header class="page-header">
                  <h1><z style="color:#de1a1a;"><?php wp_title(''); ?></z> </h1>
                </header><!-- .page-header --><?php endif; ?>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Appointment</li>
               </ol>
            </div>
         </section>
			
	<?php endif; ?>


	<section class="site-content-contain">
		<div id="content" class="site-content">

	