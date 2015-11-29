<?php
    $image_field = papi_get_field('image');
?>

  <div class="card">
<a href="<?php the_permalink(); ?>">
    <div class="card-image">
      <img src="<?= $image_field->sizes['large']['url'] ?>" alt="<?=get_the_title()?>">
    </div>
    <div class="card-header">
      <?=get_the_title()?>
    </div>
    <div class="card-copy">
      <p>
      <?=get_post_excerpt()?>
      <?php 
      $categories = get_the_category();
      if( $categories ) {
          //echo $categories[0]->name . ' ';
      }
      ?>
      </p>
    </div>
</a>
  </div>


