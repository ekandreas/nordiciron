<?php

namespace nordiciron;

class Navigation
{
    function __construct()
    {

		add_action( 'init', function() {
			register_nav_menu( 'footer-menu', __( 'Footer Menu' ));
		} );

    }

}

new Navigation();