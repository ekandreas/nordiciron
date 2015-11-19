<?php 
    get_template_part( 'templates/parts/head' );
?>

<div class="main">
    <div class="section">
        <div class="container">

            <div class="row tim-row">
            	<img src="<?= papi_get_field('image')->url ?>" alt="product image" class="img-thumbnail img-responsive" />
                <h1 class="text-center"><?php the_title() ?></h1>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    <?php 
                    $categories = get_the_category();
                    if( $categories ) {
                        foreach ($categories as $key => $category) {
                            echo '<a class="btn btn-info btn-fill" href="/category/' . $category->slug . '">' . $category->name . '</a>&nbsp;';
                        }
                    }
                    ?>
                    </p>
                    <p>
                        <?php the_content() ?>
                    </p>

                </div>
            </div>

            <?php get_template_part('templates/parts/all_cat_buttons'); ?>

        </div>
    </div>
</div>

<?php 
    get_template_part( 'templates/parts/footer' );