<?php get_header(); ?>

<section id="slider">
   <?php echo get_new_royalslider(1); ?>
</section>
<div id="content">
   <div class="grid_4">
       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage') ) : ?><?php endif; ?>
   </div>
   
   <div class="grid_4">
      <h2>Latest News</h2>
      <?php
         global $post;
         $args = array( 'numberposts' => 3, 'category' => 3 );
         $lastposts = get_posts( $args );
         foreach($lastposts as $post) : setup_postdata($post); ?>
            <div class="post-excerpt"> 
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                
               <?php the_excerpt('[...]'); ?><span class="read_more"><a href="<?php the_permalink(); ?>">[...]</a></span>             
            </div>   
            <?php endforeach; ?>
         <a href="http://www.adsatis.com/news">All News</a>   
   </div>  
   <div class="grid_4">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>	
   </div>
   <q class="grid_12">Adsatis = Expert + Objective + Focussed.</q>
</div>

<?php get_footer(); ?>