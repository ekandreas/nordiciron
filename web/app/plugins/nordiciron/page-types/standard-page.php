<?php

class News_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'page',
            'name'        => 'Standard',
        ];
    }

    public function remove() {
        return [
            'commentstatusdiv',
        ];
    }
    
    public function register() {

        $this->box( 'Page', [
            papi_property( [
                'slug'  => 'image',
                'title' => 'Image',
                'type'  => 'image',
                'description' => '',
            ] ),
        ] );


    }

}
