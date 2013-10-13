<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-44818165-1', 'dialoggroup.com');
          ga('send', 'pageview');

        </script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina.js/js/retina-1.1.0.min.js"></script>
<div class="push"></div>
</div><?php //end #wrapper : makes sticky footer work ?>
    <div class="footer-wrap">
      <div class="footer-inner">
        <div class="footer-menu-wrap">
          <?php
          wp_nav_menu("Footer");
          ?>
        </div>
      </div>
    </div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>