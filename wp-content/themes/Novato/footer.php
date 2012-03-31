<?php global $theme; ?>

    <div id="footer-wrap" class="span-24">
    
        <div id="footer">
    
        <div id="copyrights">
            <?php
                if($theme->display('footer_custom_text')) {
                    $theme->option('footer_custom_text');
                } else { 
                    ?> &copy; <?php echo date('Y'); ?>  <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved.', 'themater');
                }
            ?> 
        </div>
        
        <?php 
            // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // Warning! Your site may stop working if these links are edited or deleted
            //
            // You can buy the link free version of this theme online from http://fthemes.com/buy/
        ?>
        
        <div id="credits">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> | Designed by: <a href="http://www.seo.us.com">search engine optimization company</a> | Thanks to <a href="http://www.seo.us.com/seo-services">seo service</a>, <a href="http://www.seocompany.biz">seo company</a> and <a href="http://seo-company-services.co.uk">seo company</a></div><!-- #credits -->
        
        </div><!-- #footer -->
        
    </div><!-- #footer-wrap -->

</div>

</div>


<?php wp_footer(); ?>
<?php $theme->hook('html_after'); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28838630-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
