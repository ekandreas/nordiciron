
                <?php if( $image_field = papi_get_field('image')  ) { ?>
                    <img src="<?= $image_field->url ?>" alt="product image" class="img-thumbnail img-responsive" />
                <?php } ?>

