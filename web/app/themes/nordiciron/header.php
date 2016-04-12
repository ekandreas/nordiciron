<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nordiciron
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="96x96" href="<?=get_stylesheet_directory_uri()?>/favicon.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--meta name="description" content="<?=get_post_excerpt(null, 100)?>" /-->

<?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '447048818837248');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=447048818837248&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60162402-4', 'auto');
  ga('send', 'pageview');

</script>

<div id="page" class="hfeed site">

	<header class="navigation" role="banner">
	  <div class="navigation-wrapper">  
	  			
		<a class="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			<?php if (get_theme_mod('site_logo')) {
    echo '<img src="'. get_theme_mod('site_logo') . '" alt="'.get_bloginfo('name').'">';
} else {
    ?>
			<img src="<?php bloginfo('template_url');
    ?>/images/nordiciron-small.png" alt="<?php bloginfo('name');
    ?>">
			<?php 
} ?>
		</a>
				
	    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
	    <nav role="navigation">

	      <?php 
              $menu_defaults =    array(
                  'theme_location' => 'primary',
                'container'       => '',
                'menu_id'         => 'js-navigation-menu',
                'menu_class'      => 'navigation-menu show',
              );

                  if (has_nav_menu('primary')) {
                      wp_nav_menu($menu_defaults);
                  }
          ?>
	    </nav>
	    <div class="navigation-tools">
	      <div class="search-bar">
	      	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
				<input type="search" class="field" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s" placeholder="<?php _e('Sök', 'nordiciron'); ?>" />
				<button type="submit">
	            <img src="<?php bloginfo('template_url'); ?>/images/search-icon.png" alt="Search Icon">
	          </button>
			</form>
	      </div>
	    </div>
	  </div>
	</header>


	<div id="content" class="site-content">



