<?php
/**
 * Template Name: Homepage
 *
 *
 * @package nordiciron
 */

get_header(); ?>

<?php 
	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

<div class="hero" style="<?php echo $bg; ?>">
	<div class="hero-inner">
    <div class="hero-logo">
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
	</div>
		<div class="hero-copy">

			<?=papi_get_field('slogan') ?>	

			<?php echo do_shortcode('[produkter]');	?>

		</div>
	</div>
</div>

<div class="wrap">
	<div id="primary" class="content-home">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home' ); ?>

                <?php
                $products = papi_get_field('products');
                if( $products ) {
                	?>
					<div class="cards">
                	<?php
                    foreach ($products as $key => $product) {
                        $post = get_post( $product->ID );
                        setup_postdata( $post );
                        get_template_part('templates/parts/product-card');
                    }
                	?>
					</div>
                	<?php
                }
                wp_reset_postdata();
                ?> 

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div> <!-- .wrap -->

<?php get_footer(); ?>
