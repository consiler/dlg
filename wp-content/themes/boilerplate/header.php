<?php
/**
 * Header Template
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>Dialog Group - Need Page Specific Titles</title>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
		//If you delete this line, the wordpress admin menu will not appear at the top of the page
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
<div id="nav-menu-wrap">
  <nav id="nav-menu-container" class="centered">
    <?php
              $defaults = array(
                'theme_location'  => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0
                //'walker'          => new HeaderWalker()
              );
              wp_nav_menu($defaults);
              ?>
    <div id="nav-menu-social-buttons">
    </div>
  </nav>
</div>
<div id="sub-menu-wrap">
  <nav id="sub-menu-container" class="centered">
    <?php //need to use javascript (quick solution) or
    //nav walker (proper solution) to bring child pages into this
    //sub menu bar ?>
  </nav>
</div>
