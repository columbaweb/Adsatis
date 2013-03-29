<?php get_header(); ?>

<div id="content">
   <div id="cat-banner" class="grid_12">
      <?php
         $cat_image = z_taxonomy_image_url($cat->term_id);
         if (!empty($cat_image)) :
      ?>
      <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" width="940" height="200" alt=""/>
      <?php endif; ?>
      <h1>Insights</h1>
   </div>  
<div class="grid_9">
   <p class="intro"><?php echo category_description(13); ?></p> 
</div>
   <div class="grid_3">
      <div id="cat-sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Insights') ) : ?><?php endif; ?>
      </div>
   </div>

<div class="grid_12">
   <?php wp_nav_menu( array( 'theme_location' => 'insights' ) ); ?>
   <q>'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>
</div>

</div>

<?php get_footer(); ?>