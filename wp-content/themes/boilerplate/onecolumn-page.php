<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<div id="internal-main">
  <header id="internal-main-header">
    <h3>It's not what we do, but how we do it, that delivers results.</h3>
    <p>We work as an extension of our clients...</p>
  </header>
  <div id="internal-main-body">
    <nav id="internal-main-nav">
    </nav>
    <div id="internal-main-content">
      <article class="blah">
      </article>
      <?php //OR ?>
      <h4>Something important</h4>
      <p>Something about that important thing</p>
    </div>
  </div>
</div>
<aside id="internal-sidebar">
  <div id="internal-banner-image">
    <img src="<?php //dynamically load this from a custom field called banner image ?>">
  </div>
  <?php //the following divs can be styled as is, but we should make them into wordpress widgets or custom post types ?>
  <div class="internal-sidebar-detour-link">
    <h4>Dell partnered with Dialog...</h4>
    <button class="light-grey-button">Read the case study</button>
  </div>
  <div class="internal-sidebar-decoration">
    <?php //put a fancy geometry image or something here ?>
  </div>
</aside>

<?php get_footer(); ?>