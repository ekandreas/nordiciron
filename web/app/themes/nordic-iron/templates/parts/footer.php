<footer class="footer footer-transparent">
    <div class="container">
    	<p>&nbsp;</p>
        <nav class="pull-left">
            <?php 
            wp_nav_menu( 
                [ 
                    'theme_location' => 'footer-menu',
                    'container' => null,
                ] 
            ); ?>
        </nav>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    </div>
        <hr/>
        <div class="copyright">
            <?= papi_get_option( 'footer_text' ); ?>
        </div>
    	<p>&nbsp;</p>
</footer>

<?php wp_footer(); ?>

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