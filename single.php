<?php get_header(); ?>

<div id="content">
   <div class="grid_12 parent-cat">
      <?php
         foreach((get_the_category()) as $childcat) {
         $parentcat = $childcat->category_parent;
         if ($parentcat) break;  // Save only first parent
         }
         $sep = '';
         $parentname = '';
         if ($parentcat) {
         $parentname = get_cat_name($parentcat);
         echo $parentname;
         $sep = '&nbsp;/&nbsp;';
         }
         foreach (get_the_category() as $category) {
         $cat_name = $category->cat_name;
         if ($cat_name != $parentname) {
         echo $sep;
         echo $cat_name;
         }
         $sep = '&nbsp;/&nbsp;';
         }
      ?>   
   </div>
   
   <div class="grid_9">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div <?php post_class('p_singe'); ?> >
            <h1><?php the_title(); ?></h1>
            <div class="meta">
               <?php the_time('F jS, Y') ?>
            </div>
            <?php the_content(''); ?>
         </div>
      <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
   
      <div class="p_nav">
         <div class="alignleft"><a href="<?php bloginfo('url'); ?>/news">Back to News</a></div>
      </div>
            
      <?php 
      if ( in_category(3)) { ?>
         <section id="related-posts">
            <h2>Related News</h2>
            <?php query_posts ('cat=3,9&showposts=3&orderby=rand()'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div <?php post_class('p_thumb'); ?> >
                  <h2><?php the_title(); ?></h2>
                  <div class="meta"><?php the_time('F jS, Y') ?></div>
                     <div class="excerpt">	           	
                        <?php the_excerpt('[...]'); ?><span class="read-more"><a href="<?php the_permalink(); ?>">[...]</a></span>
                     </div>
               </div>
            <?php endwhile; endif; ?>
         </section>		
      <?php }?>   	
      	
   </div>
   
   <div id="sidebar" class="grid_3">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('News') ) : ?><?php endif; ?>
   </div>
</div>
<q class="grid_12">'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>
<?php get_footer(); ?>