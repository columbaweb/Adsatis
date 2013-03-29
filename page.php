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

<div class="grid_9" id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>	
   <?php endwhile; endif; ?>
   
</div>

<div class="grid_3" id="sidebar">
   <?php if ( is_page(array( 38, 40, 42, 44 ))) { ?>
      <?php wp_nav_menu( array( 'theme_location' => 'about-us' ) ); ?>
   <?php } elseif ( is_page(array( 46, 95, 97, 99, 101, 103 ))) { ?>
      <?php wp_nav_menu( array( 'theme_location' => 'expertise' ) ); ?>      
   <?php } else {  ?>
      <p></p>
   <?php }?>
  
      <?php if ( is_page( 95 )) { ?>
      
         <div class="related-posts">
            <h2>Related Case Studies</h2>
            <ul>
               <?php
                  global $post;
                  $args = array( 'numberposts' => 3, 'category' => 7 );
                  $lastposts = get_posts( $args );
                  foreach($lastposts as $post) : setup_postdata($post); ?>
                  <li>
                     <a href="<?php bloginfo('url'); ?>/category/insights/case-studies/risk-cases#post-<?php echo get_the_ID(); ?>"><?php the_title(); ?></a>
                  </li>
               <?php endforeach; ?>
	   </ul>		    
                 <a class="morelink" href="<?php bloginfo('url'); ?>/category/insights/case-studies/risk-cases">See More</a>
         </div>
      
      <?php } elseif ( is_page(97)) { ?>
         <div class="related-posts">
            <h2>Related Case Studies</h2>
            <ul>
               <?php
			global $post;
			$args = array( 'numberposts' => 3, 'category' => 9 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); ?>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/insights/case-studies/trade-and-post-trade-services-cases#post-<?php echo get_the_ID(); ?>"><?php the_title(); ?></a>
			</li>
               <?php endforeach; ?>
            </ul>
            <a class="morelink" href="<?php bloginfo('url'); ?>/category/insights/case-studies/trade-and-post-trade-services-cases">See More</a>
         </div>
      
      <?php } elseif ( is_page(99)) { ?>
         <div class="related-posts">
            <h2>Related Case Studies</h2>
            <ul>        
               <?php
			global $post;
			$args = array( 'numberposts' => 3, 'category' => 10 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); ?>
			<li>
				<a href="<?php bloginfo('url'); ?>/insights/case-studies/markets-technology-cases#post-<?php echo get_the_ID(); ?>"><?php the_title(); ?></a>
			</li>
               <?php endforeach; ?>
            </ul>
            <a class="morelink" href="<?php bloginfo('url'); ?>/insights/case-studies/markets-technology-cases">See More</a>
         </div>   
      
      <?php } elseif ( is_page(101)) { ?>
         <div class="related-posts">
            <h2>Related Case Studies</h2>
            <ul>
               <?php
			global $post;
			$args = array( 'numberposts' => 3, 'category' => 11 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); ?>
			<li>
				<a href="<?php bloginfo('url'); ?>/insights/case-studies/client-and-sales-management-cases#post-<?php echo get_the_ID(); ?>"><?php the_title(); ?></a>
			</li>
               <?php endforeach; ?>
            </ul>
            <a class="morelink" href="<?php bloginfo('url'); ?>/insights/case-studies/client-and-sales-management-cases">See More</a>
         </div>   
           
      <?php } elseif ( is_page(103)) { ?>
         <div class="related-posts">
            <h2>Related Case Studies</h2>
            <ul>
               <?php
			global $post;
			$args = array( 'numberposts' => 3, 'category' => 12 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); ?>
			<li>
				<a class=".menuitem" href="<?php bloginfo('url'); ?>/insights/case-studies/enterprise-data-management-cases#post-<?php echo get_the_ID(); ?>" ><?php the_title(); ?></a>
			</li>
               <?php endforeach; ?>
            </ul>
            <a class="morelink" href="<?php bloginfo('url'); ?>/insights/case-studies/enterprise-data-management-cases">See More</a>
         </div>                  
      <?php } else {  ?>
      <p></p>   
   
   <?php }?>
   
</div>

<q class="grid_12">'Adsatis clearly articulated the problem, anticipated the objectives and identified what needed to be put right.'</q>

<?php get_footer(); ?>