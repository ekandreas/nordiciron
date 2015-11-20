<?php 
    get_template_part( 'templates/parts/head' );

    if( $post ) setup_postdata( $post );
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

                $products = papi_get_field('products');

                if( $products ) {
                    foreach ($products as $key => $product) {
                        $post = get_post( $product->ID );
                        setup_postdata( $post );
                        get_template_part('templates/parts/product-card');
                    }
                }
                wp_reset_postdata();


                ?>                

            </div>
        
        </div>

    </div>
</div>

<?php 
    get_template_part( 'templates/parts/footer' );