<?php get_header(); ?>

<div class="grid_9" id="content">
   <h1>Error 404 <br />The page you are looking for does not exist</h1>
   <p>Something has gone wrong and the page you're looking for can't be found.<br />
   Hopefully one of the options below will help you:</p>
   <ul class="searchpage">
      <li><span>You can search the site using the search box</span></li>
      <li><span>You could visit <a href="">the homepage</a></span></li>
      <li><span>Or you could have a look through the recent posts listed below, maybe what you are  looking for is there</span></li>
   </ul>
   <h2>Recent Posts</h2>
   <ul>
      <?php
         query_posts('posts_per_page=3');
         if (have_posts()) : while (have_posts()) : the_post(); ?>
         <li><a href="<?php the_permalink() ?>" title="Permalink for : <?php the_title(); ?>"><?php the_title(); ?></a></li>
         <?php endwhile; endif; wp_reset_query();?>
   </ul>
</div>

<div class="grid_3" id="sidebar">
   <?php wp_nav_menu( array( 'theme_location' => 'expertise' ) ); ?>
</div>

<q class="grid_12">Adsatis = Expert + Objective + Focussed.</q>

<?php get_footer(); ?>