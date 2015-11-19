<?php

class News_Page_Type extends Papi_Page_Type
{

    public function page_type()
    {
        return [
            'post_type'   => 'page',
            'name'        => 'Standard',
        ];
    }

    public function register() {

        $this->remove([
            'commentstatusdiv',
        ]);

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
