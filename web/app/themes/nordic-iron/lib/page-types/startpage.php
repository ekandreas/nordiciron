<?php

class Startpage_Page_Type extends Papi_Page_Type
{

    public function page_type()
    {
        return [
            'post_type'   => 'page',
            'name'        => 'Start Page',
        ];
    }

    public function register() {

        $this->remove([
            'commentstatusdiv',
        ]);

        $this->box( 'Products', [
            papi_property( [
                'slug'  => 'slogan',
                'title' => 'Slogan',
                'type'  => 'string',
            ] ),
            papi_property( [
                'slug'  => 'products',
                'title' => 'Produktkort',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'products',
                ],
                'description' => 'Products cards to show on the start page',
            ] ),
        ] );

    }

}
