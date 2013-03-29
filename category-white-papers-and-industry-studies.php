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
      <p><?php echo category_description(14); ?></p>
   </div>
   <div class="grid_3">
      <div id="cat-sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Insights') ) : ?><?php endif; ?>
      </div>
   </div>

   <div class="grid_12">
      <?php wp_nav_menu( array( 'theme_location' => 'insights' ) ); ?>
   </div>

   <div id="tabs" class="grid_12">
         <ul id="white-papers">
            <?php query_posts('category_name=white-papers-and-industry-studies&posts_per_page=100'); ?>
            <?php while (have_posts()) : the_post(); ?>
               <li class="white-papers-post">
                     <h2><?php the_title(); ?></h2>
                     <p>Author: <strong><?php the_field('white_paper_author'); ?></strong>, <?php the_field('white_paper_date'); ?></p>
                     <?php the_content(); ?>
                  </li>	
            <?php endwhile;?>
            
         </ul>
   </div>  
   <q class="grid_12">'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>
</div>

<?php get_footer(); ?>