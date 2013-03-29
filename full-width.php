<?php /* Template Name: Full Width */  ?>
<?php get_header(); ?>

<?php 
   $image = wp_get_attachment_image_src(get_field('header_image'), 'full'); 
   if ($image == '')
   { ?>			
   <?php } else { ?>
      <div class="grid_12" id="banner">
         <img src="<?php echo $image[0]; ?>" alt="<?php get_the_title(get_field('image')) ?>" />
      </div>
      <p><?php the_field('heading'); ?></p>
<?php } ?>

<div id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="grid_12"><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; endif; ?>
</div>

<?php if(get_field('quote' ) != ""): ?>
   <q class="grid_12"><?php the_field('quote'); ?></q>
<?php endif; ?>

<?php get_footer(); ?>