<?php
  get_header();
?>

<div id="content" class="two-thirds">

 <!-- Start the Loop. -->
 <ul>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <li>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  </li>
 <?php endwhile; else : ?>
 </ul>

  <!-- REALLY stop The Loop. -->
  <p>조회할 글이 없습니다.</p>

 <?php endif; ?>

</div><!-- #content-->

<!-- the sidebar - in WordPress this will be populated with widgets -->
<aside class="sidebar widget-area one-third right" role="complementary">

  <div class="widget-container">
    <h3 class="widget-title">A sidebar widget</h3>
    <p>This is a sidebar widget - in your WordPress theme you can set these up to display across your site.</p>
  </div><!-- .widget-container -->

  <div class="widget-container">
    <h3 class="widget-title" 3>Another sidebar widget</h3>
    <p>A second sidebar widget - maybe you could use a plugin to display a social media feed, or simply list your most
      recent posts.</p>
  </div><!-- .widget-container -->

</aside>

<?php
  get_footer();
?>