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
<div id="internal-wrap">
  <div id="internal-header-wrap">
    <div id="internal-header" class="centered">
      <header id="internal-header-text">
        <h3>It's not what we do, but how we do it, that delivers results.</h3>
        <p>We work as an extension of our clients...</p>
      </header>
      <div id="internal-banner-image">
        <img src="<?php bloginfo('template_url'); ?>/images/stock-man-working.jpg">
      </div>
    </div>
  </div>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main">
        <nav id="internal-main-nav">
          <ul>
            <li><a href="#something">Purpose and Performance</a></li>
            <li><a href="#something">Insights and Analytics</a></li>
            <li><a href="#something">Growth Strategy</a></li>
          </ul>
        </nav>
        <article id="internal-main-content">
          <h4>Something important</h4>
          <p>Something about that important thing</p>
          <h4>Lorem Ipsum</h4>
          <p>Sit amet sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
        </article>
      </div>
      <aside id="internal-sidebar">
        <?php //the following divs can be styled as is, but we should make them into wordpress widgets or custom post types ?>
        <div id="internal-sidebar-detour-link">
          <h4>Dell partnered with Dialog...</h4>
          <button class="lighter-grey-button">Read the case study</button>
        </div>
        <div id="internal-sidebar-decoration">
          <?php //put a fancy geometry background here ?>
        </div>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>