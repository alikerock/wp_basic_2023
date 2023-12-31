<?php
  get_header();
?>

<div id="content" class="two-thirds">
  
<h2>최근 뉴스</h2>
<ul>

<?php

query_posts( array('category_name'  => 'news','posts_per_page' => 2) );

// The Loop
while ( have_posts() ) : the_post();
?>

<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

<?php
endwhile;

wp_reset_query();
?>

</ul>






</div><!-- #content-->

<!-- the sidebar - in WordPress this will be populated with widgets -->

<?php
  get_sidebar();
?>
<?php
  get_footer();
?>