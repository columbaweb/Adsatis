<?php /* Template Name: Careers */  ?>
<?php get_header(); ?>

<div class="grid_12" id="banner">
   <?php 
      $image = wp_get_attachment_image_src(get_field('header_image'), 'full'); 
      if ($image == '')
      { ?>			
      <?php } else { ?>
      <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('header_image')) ?>" /> 
   <?php } ?>
   <p><?php the_field('heading'); ?></p>
</div>

<div id="content" class="grid_9">
   <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; ?>
</div>
<div class="grid_3">
   <div id="sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Careers') ) : ?><?php endif; ?>
   </div>
</div>
<?php if(get_field('quote' ) != ""): ?>
   <q class="grid_12"><?php the_field('quote'); ?></q>
<?php endif; ?>
<?php get_footer(); ?>