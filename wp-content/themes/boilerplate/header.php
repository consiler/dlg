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
  <?php //Home Page Slider A/B Test ?>
  <?php if(is_front_page()){ ?>
  <script>
  _udn = "dialoggroup.com"
  </script>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='77648298-2',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
  <?php } ?>)

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>Dialog Group - Need Page Specific Titles</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>-->
    <script src="<?php bloginfo('template_url'); ?>/js/orbit/jquery.orbit.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/orbit/orbit.css">
    <script>
    //Navbar code
      $(document).ready(function(){
        var slideMenu = $('#nav-menu-slide');

        //Extract the sub menus
        $('#menu-top-navigation > li > .sub-menu').each(function(i,v){
          var vj = $(v);
          var slideCenter = $('#nav-menu-slide-center');
          var group_index = 0;
          //Partition the submenu into groups of 3 or less
          while(vj.children('li').length > 3){
            //get 3 children and allocate them into a new submenu
            vj.children("li:lt(3)").wrapAll("<div></div>");
            group_index++;
            if(group_index > 100) break;
          }
          vj.children('li').wrapAll("<div>");
          //move the submenu to slide menu
          var parent = vj.parent();
          var parent_position_left = parent.position().left;
          var parent_index = parent.index();
          parent.addClass('hassubmenu');
          vj.css({left: parent_position_left});
          slideCenter.append(vj.attr('data-sub-menu-index',''+parent_index));
        });

        //Utility function for later
        function contractMenu()
        {
          slideMenu.stop()
                .animate({
                  top: -24
                }, 400, 'swing', function(){
                  $('#nav-menu-slide-center ul[data-sub-menu-index='+i+']').hide();
                  slideMenu.stop();
              });
        }

        //Manage slide menu hover state
        $('#nav-menu-slide').hover(function(){
          slideMenu.stop();
        }, contractMenu);

        //Activate and close slide menu hover state from top level
        $('#menu-top-navigation > li').each(function(i,v){
          if($(v).hasClass('hassubmenu')){
            $(v).hover(function() {
              $('#nav-menu-slide-center ul').hide();
              //nmw.attr('class','shade');
              $('#nav-menu-slide-center ul[data-sub-menu-index='+i+']').css({display: 'block'});
              slideMenu.stop()
              .animate({
                top: 71
              });
            }, contractMenu);
          }
        });
      });
    </script>
<?php
		//If you delete this line, the wordpress admin menu will not appear at the top of the page
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
<div id="wrapper">
<div id="nav-menu-wrap">
  <nav id="nav-menu" class="centered">
    <a href="<?php bloginfo('wpurl'); ?>" id="dlg-logo">
      <div id="dlg-logo-top"></div>
      <div id="dlg-logo-bottom"></div>
    </a>
    <?php
      wp_nav_menu(array(
        'theme_location'  => 'primary',
        'menu'            => 'Top Navigation'
        )
      );
    ?>
    <div id="nav-menu-social-buttons">
      <a href="https://twitter.com/DialogGroup" id="twitter" target="_blank"></a>
      <a href="http://www.linkedin.com/company/409027?trk=prof-exp-company-name" id="linkedin" target="_blank"></a>
      <a href="https://www.facebook.com/pages/Dialog-Group/207028266144869" id="facebook" target="_blank"></a>
    </div>
  </nav>
</div>
<div id="nav-menu-slide">
  <div id="nav-menu-slide-center" class="centered">
  </div>
</div>
<div id="sub-menu-wrap">
  <nav id="sub-menu" class="centered">
  <?php
    if(is_front_page()){
      ?>
      <div><!-- <a href="/overview">Overview</a> --></div>
      <?php
    } ?>
  </nav>
</div>