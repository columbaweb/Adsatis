<?php get_header(); ?>

<div id="content">
   <div id="cat-banner" class="grid_12">
      <?php
         $cat_image = z_taxonomy_image_url($cat->term_id);
         if (!empty($cat_image)) :
      ?>
      <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" width="940" height="200" alt=""/>
      <?php endif; ?>
      <h1><?php single_cat_title(); ?></h1>
   </div>
   
   <div class="grid_9">
      <?php if ( is_category( 3 )) { ?>
	<p class="intro"><?php echo category_description(3); ?></p>
      <?php }?>
      
      <section class="posts">         
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div <?php post_class('p_thumb'); ?> >
               <h2><?php the_title(); ?></h2>
               <div class="meta">
                   <?php the_time('F jS, Y') ?>
               </div>	
               <div class="excerpt">	           	
                  <?php the_excerpt('[...]'); ?><span class="read-more"><a href="<?php the_permalink(); ?>">[...]</a></span>
               </div>	
            </div>
         <?php endwhile; endif; wp_reset_query(); ?> 
   	 <?php wp_pagenavi(); ?>         
      </section> 
   </div>
   
   <div id="sidebar" class="grid_3">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('News') ) : ?><?php endif; ?>
   </div>
</div>

<q class="grid_12">'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>

<?php get_footer(); ?>