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