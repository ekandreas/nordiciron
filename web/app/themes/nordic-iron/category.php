<?php 
    get_template_part( 'templates/parts/head' );

?>

<div class="main">
    <div class="section">
        <div class="container">

            <div class="row tim-row">
                <h1 class="text-center"><?php single_cat_title() ?></h1>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    </p>
                </div>
                
            </div>

            <div class="row">

                <?php

                $the_query = new WP_Query( [
                    'cat' => get_queried_object()->term_id,
                    'posts_per_page' => -1,
                    'post_type' => 'products',
                ] );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { 
                        $the_query->the_post();
                        get_template_part('templates/parts/product-card');
                    }
                } else {
                }
                wp_reset_postdata();


                ?>                

            </div>

                    <?php get_template_part('templates/parts/all_cat_buttons'); ?>
        
        </div>
<!-- end container -->
    </div>
</div>

<?php 
    get_template_part( 'templates/parts/footer' );