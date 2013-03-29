<?php /* Template Name: Community */  ?>
<?php get_header(); ?>

<div id="content" class="grid_9">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; endif; ?>
</div>
<div class="grid_3">
   <div id="sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Community') ) : ?><?php endif; ?>
   </div>
</div>
<?php if(get_field('quote' ) != ""): ?>
   <q class="grid_12"><?php the_field('quote'); ?></q>
<?php endif; ?>
<?php get_footer(); ?>