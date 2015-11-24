<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=get_stylesheet_directory_uri()?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=get_stylesheet_directory_uri()?>/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Nordic Iron</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="<?=get_stylesheet_directory_uri()?>/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=get_stylesheet_directory_uri()?>/assets/css/gsdk.css" rel="stylesheet"/>
    
    <link href="<?=get_stylesheet_directory_uri()?>/assets/css/demo.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>  
    <link href="<?=get_stylesheet_directory_uri()?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />  
</head>

<body <?=body_class(); ?>>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60162402-4', 'auto');
  ga('send', 'pageview');

</script>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a href="/">
           <div class="logo-container">
                <div class="logos">
                    <img width="200px" src="<?=get_stylesheet_directory_uri()?>/nordic-iron.png" alt="Nordic Iron">
                </div>
            </div>
      </a>
    </div>

<?php

  $pages = papi_get_option('top_pages');
  if( $pages ) {
    ?>
    <div class="top-pages">&nbsp;&nbsp;
    <?php
    foreach ($pages as $key => $page) {
      $page = $page['page'];
      ?>
      <a href="<?=get_permalink($page->ID)?>" class="btn"><?=$page->post_title?></a>
      <?php
    }
    ?>
    </div>
    <?php
  }

?>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">

      <ul  class="nav navbar-nav navbar-right">
            <li>
              <?php do_action('wpml_add_language_selector'); ?>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
