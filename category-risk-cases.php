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
      <p><?php echo category_description(6); ?></p>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Insights Details') ) : ?><?php endif; ?>
   </div>
   <div class="grid_3">
      <div id="cat-sidebar">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Insights') ) : ?><?php endif; ?>
      </div>
   </div>

   <div class="grid_12">
      <?php wp_nav_menu( array( 'theme_location' => 'insights' ) ); ?>
   </div>

   <div id="tabs2" class="grid_12">
	      <?php wp_nav_menu( array( 'theme_location' => 'case-studies' ) ); ?>
	      <div id="accordion" class="grid_8 case-studies-post">
			<?php query_posts('cat=7&posts_per_page=100&orderby=epo_custom'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				   <h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?><span class="morespan">Read</span></h3>
	                           <div><?php the_content(); ?></div>
				<?php endwhile; endif; ?>
	   </div>


</div>
<q class="grid_12">'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>

<?php get_footer(); ?>