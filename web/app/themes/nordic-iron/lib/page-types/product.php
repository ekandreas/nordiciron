<?php

class Product_Page_Type extends Papi_Page_Type
{

    public function page_type()
    {
        return [
            'post_type'   => 'products',
            'name'        => 'Standard Product',
        ];
    }

    public function register() {

        $this->box( 'Product', [
            papi_property( [
                'slug'  => 'image',
                'title' => 'Image',
                'type'  => 'image',
                'description' => '',
            ] ),
            papi_property( [
                'slug'  => 'startpage',
                'title' => 'Show on Startpage',
                'type'  => 'bool',
                'description' => '',
            ] ),
        ] );

    }

}
