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

<?php wp_head(); ?>


    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/css/creative.min.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>  id="page-top">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>


<!-- Header Carousel ===================== -->  
    
<?php if (  is_home() || is_front_page()  ) { ?>

<header id="slider">



<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  		<ol class="carousel-indicators">
    		<?php
			$number = 0; 
 			$args = array(
							'post_type' => 'slider',
							'order' 	=> 'ASC',
							'tax_query' => array(
								array(
									'taxonomy' 	=> 'slider-category',
									'field'    	=> 'slug',
									'terms'    	=> 'header-slider'
									
								)
							)
						);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
    		<li data-target="#myCarousel" data-slide-to="<?php echo $number++; ?>" class=""></li>
    		<?php endwhile; ?>
  		</ol>

  		<div class="carousel-inner">
		  	<?php      	  
			while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="item">';

			//$sliderimage = get_post_meta($post->ID, "slider-image", single);
      		//$sliderurl = get_post_meta($post->ID, "slider-image-url", single);

			?>
			<a href="<?php the_field('slider_image_url');?>"><img src="<?php the_field('slider_image'); ?>"></a>
			
			</div>
			<?php
			endwhile;
			wp_reset_postdata();
		    ?> 
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

	       
</header>
    
 <script>
jQuery(document).ready(function($){
  $("#myCarousel .carousel-indicators li:first").addClass("active");
  $("#myCarousel .carousel-inner .item:first").addClass("active");
  //$("#myCarousel .carousel-inner img").addClass("thumbnail");
});
</script>
<?php } ?>     
    
<!-- end Header Carousel =============== -->  



	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) && !$products) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
