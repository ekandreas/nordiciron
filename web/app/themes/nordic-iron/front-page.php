<?php 
    get_template_part( 'templates/parts/head' );
?>

<div class="parallax">
    <div class="parallax-image">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/header.jpg">
    </div>
    <div class="motto">
        <div><?=papi_get_field('slogan'); ?></div>
    </div>
    <h3 class="text-white"></h3>
</div>

<div class="main">
    <div class="section">
        <div class="container">

            <div class="row tim-row">
                <h1 class="text-center"><?php the_title() ?></h1>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        <?php the_content() ?>
                    </p>
                </div>
                
            </div>

            <div class="row">

            <?php

                $the_query = new WP_Query( [
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
        
        </div>
<!-- end container -->
    </div>
</div>

<?php 
    get_template_part( 'templates/parts/footer' );