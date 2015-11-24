<?php

class Main_Option_Type extends Papi_Option_Type {

  public function meta() {
    return [
      'menu' => 'themes.php',
      'name' => 'Nordic Iron',

    ];
  }

    public function register() {

        $this->box( 'Top menu', [
            papi_property( [
                'slug'  => 'top_pages',
                'title' => 'Top Pages',
                'type'  => 'repeater',
                'settings' => [
                'items' => [
                  [
                    'slug' => 'page',
                    'type' => 'post',
                    'settings' => [
                        'post_type' => 'page',
                    ]
                  ]
                ] 
                ]
            ] ),
        ] );

        $this->box( 'Categories', [
            papi_property( [
                'slug'  => 'public_categories',
                'title' => 'Public Categories',
                'type'  => 'repeater',
                'description' => 'Selected categories will show on pages as public reference links',
                'settings' => [
                'items' => [
                  [
                    'slug' => 'term',
                    'type' => 'term',
                    'settings' => [
                      'taxonomy' => 'category'
                    ]
                  ]
                ] 
                ]
            ] ),
        ] );

        $this->box( 'Footer', [
            papi_property( [
                'slug'  => 'footer_text',
                'title' => 'Footer Text',
                'type'  => 'editor',
                'description' => 'Show text in the footer',
            ] ),
        ] );

    }

}