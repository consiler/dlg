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
      <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/fp_slides/1.jpg);">
        <div class="carousel-headline-wrap">
          <h2 class="carousel-headline">Succeeding in an<br> age of transformation.</h2>
          <p class="carousel-subheading">Important shifts in technology and behavior are driving <br>
big changes in your markets and customers. Leadership in <br>
the new century requires equally bold ideas about building <br>
brand, value, and user experience.</p>
        </div>
      </div>
      <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/fp_slides/2.jpg);">
        <div class="carousel-headline-wrap">
          <h2 class="carousel-headline">Top tier digital<br>strategy and<br>execution.</h2>
          <p class="carousel-subheading">Dialog is a professional services firm that <br>
          combines high-level strategic insight and robust <br>
          tactical expertise to deliver strategy at the <br>speed of digital.</p>
        </div>
      </div>
      <div style="background-image: url(<?php bloginfo('template_url'); ?>/images/fp_slides/3.jpg);">
        <div class="carousel-headline-wrap">
          <h2 class="carousel-headline">Top tier digital<br>strategy and<br>execution.</h2>
          <p class="carousel-subheading">Dialog is a professional services firm that <br>
          combines high-level strategic insight and robust <br>
          tactical expertise to deliver strategy at the <br>speed of digital.</p>
          <p class="carousel-subheading carousel-subheading-bold">Domination requires transformation.<br>Are you prepared?</p> 
          <a href="practice-areas/digital-experiences/"><span class="lighter-grey-button">Learn More</span></a>
        </div>
      </div>
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