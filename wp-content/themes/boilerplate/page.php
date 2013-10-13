<?php
/**
 * Template Name: Main Page Template
 *
 * A custom page template with an optional sidebar.
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
        <h3><?php the_field('page_heading_text'); ?></h3>
        <p><?php the_field('page_subheading_text'); ?></p>
      </header>
      <div id="internal-banner-image">
        <img src="<?php the_field('page_heading_image'); ?>">
      </div>
    </div>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main"<?php if(!get_field('has_sidebar')){ ?> class="internal-main-fullwidth"<?php } ?>>
        <nav id="internal-main-nav">
          <ul>
            <?php
              $all_pages = get_pages();
              $children = get_page_children(get_the_ID(), $all_pages);
              foreach($children as $child)
              {
                $child_href = get_page_link($child->ID);
                $child_title = $child->post_title;
                ?>
                  <li><a href="<?php echo $child_href; ?>"><?php echo $child_title; ?></a></li>
                <?php
              }
            ?>
          </ul>
        </nav>
        <article id="internal-main-content"<?php if(!get_field('has_sidebar')){ ?> class="internal-content-fullwidth"<?php } ?>>
          <?php the_content(get_the_ID()); ?>
        </article>
      </div>
      <?php if(get_field('has_sidebar')){ ?>
      <aside id="internal-sidebar">
        <?php if(get_field('detour_link_heading')){ ?>
        <div id="internal-sidebar-detour-link">
          <h4><?php the_field('detour_link_heading'); ?></h4>
          <a href="<?php the_field('detour_link_page'); ?>"><span class="lighter-grey-button"><?php the_field('detour_link_cta'); ?></span></a>
        </div>
        <?php } ?>
        <div id="internal-sidebar-decoration">
          <?php //put a fancy geometry background here ?>
        </div>
      </aside>
      <?php } ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>