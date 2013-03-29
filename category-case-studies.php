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

   <div id="tabs" class="grid_12">
      <ul class="nav">
         <li class="nav-one first"><a href="#tab-one" class="current">Risk</a></li>
         <li class="nav-two"><a href="#tab-two">Trade and Post Trade Services</a></li>
         <li class="nav-three"><a href="#tab-three">Markets Technology</a></li>
         <li class="nav-four"><a href="#tab-four">Client and Sales Management</a></li>
         <li class="nav-five last"><a href="#tab-five">Enterprise Data Management</a></li>
      </ul>

      <div class="list-wrap">
         <ul id="tab-one">
            <li>
               <ul id="accordion" class="grid_8 case-studies-post">
                  <?php query_posts('cat=7&posts_per_page=100&orderby=epo_custom'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?><span class="morespan">Read</span></h3>
		                           <div><?php the_content(); ?></div>
					<?php endwhile; endif; ?>
                </ul>   
            </li>
         </ul>
        		 
         <ul id="tab-two" class="hide">
			<li>
               <ul id="accordion" class="grid_8 case-studies-post">
                  <?php query_posts('cat=9&posts_per_page=100&orderby=epo_custom'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <h3 id="post-<?php the_ID(); ?>"><?php the_title(); ?><span class="morespan">Read</span></h3>
		                           <div><?php the_content(); ?></div>
					<?php endwhile; endif; ?>
                </ul>   
            </li>
				
         </ul>
      
         <ul id="tab-three" class="hide">
            <li>
               <ul class="accordion">
                  <?php
                     global $post;
                     $args = array( 'numberposts' => 100, 'category' => 10 );
                     $lastposts = get_posts( $args );
                     foreach($lastposts as $post) : setup_postdata($post); ?>
                        <li class="grid_8 case-studies-post">
                           <a href="#"><?php the_title(); ?><span>Read</span></a>
                           <ul>
                              <li>Tagline</li>
                              <li><?php the_content(); ?></li>
                           </ul>   
                        </li>	
                   <?php endforeach; ?>
                </ul>   
            </li>
         </ul>
      
         <ul id="tab-four" class="hide">
            <li>
               <ul class="accordion">
                  <?php
                     global $post;
                     $args = array( 'numberposts' => 100, 'category' => 11 );
                     $lastposts = get_posts( $args );
                     foreach($lastposts as $post) : setup_postdata($post); ?>
                        <li class="grid_8 case-studies-post">
                           <a href="#"><?php the_title(); ?><span>Read</span></a>
                           <ul>
                              <li><?php the_content(); ?></li>
                           </ul>   
                        </li>	
                   <?php endforeach; ?>
                </ul>   
            </li>
         </ul>
      
         <ul id="tab-five" class="hide">
            <li>
               <ul class="accordion">
                  <?php
                     global $post;
                     $args = array( 'numberposts' => 100, 'category' => 12 );
                     $lastposts = get_posts( $args );
                     foreach($lastposts as $post) : setup_postdata($post); ?>
                        <li class="grid_8 case-studies-post">
                           <a href="#"><?php the_title(); ?><span>Read</span></a>
                           <ul>
                              <li><?php the_content(); ?></li>
                           </ul>   
                        </li>	
                   <?php endforeach; ?>
                </ul>   
            </li>
         </ul>
      </div>
   </div>
</div>
<q class="grid_12">'Adsatis clearly identified the problem, anticipated the objectives and identified what needed to be put right.'</q>

<?php get_footer(); ?>