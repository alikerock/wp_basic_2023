<?php
  get_header();
?>

<div id="content" class="two-thirds">
  <article class="post" id="01">
    <h2 class="entry-title">This is the title of a post or page</a></h2>

    <img src="images/featured-image.jpg" class="size-large">

    <section class="entry-meta">
      <p>Posted on 5 November by Rachel McCollin</p>
    </section><!-- .entry-meta -->

    <section class="entry-content">
      <p>This is the content of the post. On an archive page it might be an excerpt of the post or you might include the
        entire content.</p>
      <h3>Images in WordPress</h3>
      <p><img src="images/another-image.jpg" class="alignright">This post has some images included - once you've
        converted this html to a WordPress theme you'll be able to get WordPress to handle images for you and life will
        be so much easier!</p>
      <p>It also has a featured image - again, WordPress will handle these for you and you'll never go back to static
        html again. You'll learn how to add support for featured images to your theme in Part 10 of this series. You can
        use them to automatically display images in your individual posts and pages and in archive pages - you'll learn
        how to set up a custom archive page in Part 11.</p>
    </section><!-- .entry-content -->

    <section class="entry-meta">
      <h3>Post categories and tags</h3>
      <p>In this section you can display information about the categories and tags associated with your post - you'll
        leran how to do this using WordPress template tags in Part 4 of this series.</p>
    </section><!-- .entry-meta -->

  </article><!-- #01-->

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