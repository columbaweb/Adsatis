<?php get_header(); ?>
<div class="grid_9" id="content">
   <h1 class="pages"><?php single_cat_title(); ?></h1>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
      <div class="post-thumb" >
         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
   <?php endwhile; endif; wp_reset_query(); ?>   
   <?php wp_pagenavi(); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>