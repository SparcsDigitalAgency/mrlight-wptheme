<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<div class="panel-content testhomepage">
		<div class="wrap">
			<h1>test home page</h1>

<?php // Get all Products category
	$taxonomy = 'products-category';
	$terms = get_terms($taxonomy); // Get all terms of a taxonomy
	if ( $terms && !is_wp_error( $terms ) ) :
	?>
    <ul class="product-category">
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>


		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
