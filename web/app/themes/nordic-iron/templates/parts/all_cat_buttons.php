<div class="row">
    <div class="col-md-12 text-center">
        <p>
            <hr/>
        </p>
        <p>
            <?php 
            $categories = get_categories();
            if( $categories ) {

                $public_categories_field = papi_get_option( 'public_categories' );
                $public_categories = [];

                if( $public_categories_field ) {
                    foreach ($public_categories_field as $key => $cat ) {
                        $public_categories[] = $cat['term']->term_id;
                    }                    
                }

                foreach ($categories as $key => $category) {
                    if( in_array( $category->term_id, $public_categories ) ) {
                        echo '<a class="btn btn-default" href="/category/' . $category->slug . '">' . $category->name . '</a>&nbsp;';
                    }
                }
            }
            ?>
        </p>
    </div>
</div>