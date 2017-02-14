<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *

 
 * @package start
 */
?>

	</div><!-- #content -->

	   <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                  © 2015 wp.beepo.com.ph, All Rights Reserved                
                </div>
                <div class="col-sm-6">
                
                </div>
            </div>
        </div>
        <a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a><!--#gototop-->
    </footer>

<script type="text/javascript" src="http://wp.beepo.com.ph/wp-content/themes/start/js/bootstrap.js"></script>

    <script>
        jQuery(document).ready(function(){
        jQuery('#carousel-main').each(function(index, element) {
        jQuery(this)[index].slide = null;
        });
        jQuery('#carousel-main').carousel('cycle');
        });
    </script>

<script type="text/javascript" src="http://wp.beepo.com.ph/wp-content/themes/start/js/navigation.js?ver=20120206"></script>
<script type="text/javascript" src="http://wp.beepo.com.ph/wp-content/themes/start/js/skip-link-focus-fix.js?ver=20130115"></script>
<script type="text/javascript" src="http://wp.beepo.com.ph/wp-includes/js/wp-embed.min.js?ver=4.7.2"></script>




</body></html>
<?php wp_footer(); ?>

