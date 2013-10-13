<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<div id="fp-slideshow-wrap">
  <div id="fp-slideshow-container" class="centered">
    <script type="text/javascript">
       $(window).load(function() {
           $('#featured').orbit({
            animation: 'fade',
            bullets: true,
            directionalNav: false,
            advanceSpeed: 5000
           });
       });
    </script>
    <div id="featured">
    <?php
      $post_type = 'frontpage_slides';
      $args=array(
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'ignore_sticky_posts'=> 1
      );
 
      $my_query = null;
      $my_query = new WP_Query($args);
      $testgroup = "A";
      if(isset($_GET['bgroup'])){ $testgroup = "B"; }
      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); $id = get_the_ID();
        if(get_field('test_group', $id) == $testgroup){
        ?>
          <div style="background-image: url(<?php the_field('slide_image', $id); ?>);">
            <div class="carousel-headline-wrap">
              <h2 class="carousel-headline"><?php the_field('slide_title', $id); ?></h2>
              <p class="carousel-subheading"><?php the_field('slide_description', $id); ?></p>
              <?php if($label = get_field('slide_cta_label', $id)){ ?>
                <a href="<?php the_field('slide_cta_link'); ?>"><span class="lighter-grey-button"><?php echo $label; ?></span></a>
              <?php } ?>
            </div>
          </div>
          <?php
        }
        endwhile;
      }
      wp_reset_query();
    ?>
    </div>
  </div>
</div>
<div id="fp-testimonials-wrap">
  <div id="fp-testimonials" class="centered">
    <div id="fp-testimonials-seemore">
      <p>We have worked with a range of clients from startups to Fortune 500 companies to help them solve a wide range of problems.
      </p>
      <span class="light-grey-button">Full Testimonials</span>
    </div>
    <div id="fp-testimonials-logos">
      <img src="<?php bloginfo('template_url'); ?>/images/testimonials-client-logos.jpg">
      <button><?php //arrow button, may indicate that this is a slideshow of images with logos ?></button>
    </div>
  </div>
</div>

<?php get_footer(); ?>