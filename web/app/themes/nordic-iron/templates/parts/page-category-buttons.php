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
