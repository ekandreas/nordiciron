<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nordiciron
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1><?php single_cat_title() ?></h1>

                <?php

                $the_query = new WP_Query( [
                    'cat' => get_queried_object()->term_id,
                    'posts_per_page' => -1,
                    'post_type' => 'products',
                ] );

                if ( $the_query->have_posts() ) {
                	?>
					<div class="cards">
                	<?php
                    while ( $the_query->have_posts() ) { 
                        $the_query->the_post();
                        get_template_part('templates/parts/product-card');
                    }
                	?>
					</div>
                	<?php
                } else {
                }
                wp_reset_postdata();


                ?>                


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div> <!-- .wrap -->

<?php get_footer(); ?>
