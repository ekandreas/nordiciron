<?php
namespace nordiciron;

class Cpt
{
    function __construct()
    {
        add_action( 'init', function () {

            \register_extended_post_type( 'products', [
                'has_archive' => false,
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_feed' => true,
                'supports' => array( 'title', 'editor', 'thumbnail' ),
                'taxonomies' => ['category'], 
                'rewrite' => true,
            ], [
                'singular' => 'Product',
                'plural'   => 'Products',
            ] );

        } );
    }

}

new Cpt();
