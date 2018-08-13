<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>




	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	
		<?php
		if ( is_single() ) {

			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

		?>	




<div class="col-md-8" style="margin-top: 50px;"><div class="row">		
<div class="col-md-4"><img src="<?php echo $featured_img_url; ?>"></div>

		<div class="col-md-4">
		<h1><span style="color:#de1a1a;"><?php echo  the_title(); ?></span></h1>
		<h3>Product Code: </h3>
		<h2>Description:</h2>
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->
</div>





		<?php
		} else {
		?>	


		 <div class=" col-md-3">
                                 <div class="product-image">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                    <!-- <div class="sale-flash">50% Off*</div> -->
                                    <div class="product-overlay">
                                       <a href="<?php echo get_permalink(); ?>" class="add-to-cart"><i class="icon-zoom-in2"></i><span>Quick View</span></a>
                                    </div>
                                 </div>
                                 <div class="product-desc">
                                    <div class="product-title" style="text-align: center;">
                                       <h3><a href="<?php echo get_permalink(); ?>"><?php echo  the_title(); ?></a></h3>
                                    </div>
                                 </div>
                              </div>




		<?php
		}
		?>


