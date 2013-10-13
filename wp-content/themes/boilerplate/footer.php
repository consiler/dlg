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
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina.js/js/retina-1.1.0.min.js"></script>

    <div class="footer-wrap">
      <div class="footer-inner">
        <div class="footer-menu-wrap">
          <?php
          $footer_defaults = array(
            'theme_location'  => 'footer-menu',
            'menu'            => '.footer-menu',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'footer-menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
          );
          wp_nav_menu( $footer_defaults );
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