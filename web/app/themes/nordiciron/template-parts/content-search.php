<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nordiciron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php nordiciron_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <?php if( $image_field = papi_get_field('image')  ) { ?>
        <img src="<?= $image_field->url ?>" alt="product image" class="img-thumbnail img-responsive" />
    <?php } ?>
                
	<div class="entry-summary">
		<?php the_content(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->

