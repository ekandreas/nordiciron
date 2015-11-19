<div class="row">
    <div class="col-md-12 text-center">
        <p>
            <hr/>
        </p>
        <p>
            <?php 
            $categories = get_categories();
            if( $categories ) {
                foreach ($categories as $key => $category) {
                    echo '<a class="btn btn-default" href="/category/' . $category->slug . '">' . $category->name . '</a>&nbsp;';
                }
            }
            ?>
        </p>
    </div>
</div>