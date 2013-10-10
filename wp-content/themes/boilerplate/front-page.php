<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php //New Front Page Code ?>

<div id="fp-slideshow-wrap">
  <div id="fp-slideshow-container">
    <?php //use bootstrap slideshow (customize) OR some other thing like slide.js ?>
    <div><?php //this div has fancy background ?>
      <h2>Succeeding in an age of accelerating change and transparency.</h2>
      <p>We operate in an age...</p>
      <?php //need to implement this global class ?>
      <a class="light-grey-button">Learn More</a>
    </div>
  </div>
</div>
<div id="fp-testimonials-wrap">
<div id="fp-testimonails-container">
    <div id="fp-testimonials-seemore">
      <p>We have worked with a range of clients from startups to Fortune 500 companies to help them solve a wide range of problems.
      </p>
      <a class="light-grey-button">Full Testimonials</a>
    </div>
    <div id="fp-testimonials-logos">
      <?php //put an image w/ white bg and all the logos, simple ?>
      <button>-><?php //arrow button, may indicate that this is a slideshow of images with logos ?></button>
    </div>
  </div>
</div>

<?php /* Everything below this is code from the base theme. Might prune it later. */ ?>
<!--
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>

        <?php comments_template( '', true ); ?>

<?php endwhile; ?>
-->
<?php get_footer(); ?>