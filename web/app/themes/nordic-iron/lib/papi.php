<?php
namespace nordiciron;

class Papi
{
    function __construct()
    {
        add_filter( 'papi/settings/directories', function ( $directories ) {
            $directories[] = get_stylesheet_directory() . '/lib/page-types';
            return $directories;
        } );
    }

    static function is_papi_page() {
        return !!\papi_get_page_type_id();
    }

}

new Papi();


