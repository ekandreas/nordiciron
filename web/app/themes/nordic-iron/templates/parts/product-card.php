<div class="col-md-4">
    <a href="<?php the_permalink(); ?>">
    <div class="card">
        <div class="image" style="background-image: url(<?=papi_get_field('image')->url?>); background-size: cover; background-position: 50% 50%;">
            <img src="<?=papi_get_field('image')->url?>" alt="..." style="display: none;">
            <div class="filter">
                <button type="button" class="btn btn-neutral btn-simple">
                    <i class="fa fa-align-left"></i> <?php the_title() ?>
                </button>
            </div>
        </div>
        <div class="content">
            <p class="category"><?php 
            $categories = get_the_category();
            if( $categories ) {
                echo $categories[0]->name . ' ';
            }
            ?></p>
            <h4 class="title"><?php the_title(); ?></h4>
        </div>
    </div>
    </a>
</div>
