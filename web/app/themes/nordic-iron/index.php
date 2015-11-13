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

<body>

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
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="/">
           <div class="logo-container">
                <div class="logos">
                    <img width="200px" src="<?=get_stylesheet_directory_uri()?>/nordic-iron.png" alt="Nordic Iron">
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul  class="nav navbar-nav navbar-right">
            <li>
                <a target="_blank" href="#" id="issueButton" class="btn btn-simple btn-neutral">Get in touch?</a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
<div class="parallax">
    <div class="parallax-image">
        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/header.jpg">
    </div>
    <div class="motto">
        <div>Slogan</div>
        <div class="border no-right-border">As</div><div class="border">it</div>
        <div>Goes</div>  
        <label class="pro square">Now!</label>
    </div>
    <h3 class="text-white">Developer Tutorial</h3>
</div>

<div class="main">
    <div class="section">
        <div class="container">
<!--         what is row -->
            <div class="row tim-row">
                <h2 class="text-center">Quote</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </p>
                </div>
                
            </div>
<!--         end row -->
        
        </div>
<!-- end container -->
    </div>
</div>
<footer class="footer footer-transparent">
    <div class="container">
    	<p>&nbsp;</p>
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="/">
                        Nordic Iron
                    </a>
                </li>
                <li>
                    <a href="#">
                        Get in touch
                    </a>
                </li>
                <li>
                    <a href="/products">
                       Products
                    </a>
                </li>
            </ul>
        </nav>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    </div>
        <hr/>
        <div class="copyright">
            &copy; <?=date('Y')?> Nordic Iron
        </div>
    	<p>&nbsp;</p>
</footer>

</body>
<script src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="<?=get_stylesheet_directory_uri()?>/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugins -->

<script src="<?=get_stylesheet_directory_uri()?>/assets/js/get-shit-done.js"></script>
<script src="<?=get_stylesheet_directory_uri()?>/assets/js/demo.js"></script>
<script>
    var transparent = true;
    var header_height;
    var fixed_section;
    var floating = false;
    
    $().ready(function(){
        suggestions_distance = $("#suggestions").offset();
        header_height = $('.parallax').outerHeight() + 20;
        pay_height = $('.fixed-section').outerHeight();
        fixed_section = $('.fixed-section');  
        
        checkScrollForPresentationNavbar();        
    });
    
    $(window).on('scroll',function(){            
        checkScrollForPresentationNavbar();
    });
    
    var checkScrollForPresentationNavbar = debounce(function() {
    	if($(this).scrollTop() > 470 ) {
            if(transparent) {
                transparent = false;
                $('nav[role="navigation"]').removeClass('navbar-transparent').addClass('navbar-small');
                $('#issueButton').addClass('btn-info').removeClass('btn-neutral');
                
            }
        } else {
            if( !transparent ) {
                transparent = true;
                $('nav[role="navigation"]').addClass('navbar-transparent').removeClass('navbar-small');
                $('#issueButton').addClass('btn-neutral').removeClass('btn-info');
            }
        }
        
        if($(this).scrollTop() > header_height ) {
                if(!floating) {
                    floating = true;
                    fixed_section.addClass('float');
                }
            } else {
                if( floating ) {
                    floating = false;
                    fixed_section.removeClass('float');    
                }
            } 
    }, 4);
        
</script>
</html>