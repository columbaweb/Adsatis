<?php /* Template Name: Management Team */  ?>

<?php get_header(); ?>

<div id="content" class="management-team">  
   <div id="tabs">
      <ul class="nav">
         <li class="nav-one first">
            <?php query_posts('post_type=team&p=639'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-one" class="current boxgrid captionfull">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
                  <span class="cover boxcaption">
                     <strong><?php the_field('name'); ?></strong>
	             <em><?php the_field('position'); ?></em>
	          </span>
             </a>
             <?php endwhile; endif; wp_reset_query(); ?>
         </li>
         
         <li class="nav-two">
            <?php query_posts('post_type=team&p=643'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-two" class="boxgrid captionfull">
               <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
               <span class="cover boxcaption">
                     <strong><?php the_field('name'); ?></strong>
	             <em><?php the_field('position'); ?></em>
	          </span>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
         </li>
         
         <li class="nav-three">
            <?php query_posts('post_type=team&p=647'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-three" class="boxgrid captionfull">
                <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
               <span class="cover boxcaption">
                  <strong><?php the_field('name'); ?></strong>
	          <em><?php the_field('position'); ?></em>
               </span>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
         </li>
         
         <li class="nav-four">
            <?php query_posts('post_type=team&p=648'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-four" class="boxgrid captionfull">
                <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
               <span class="cover boxcaption">
                  <strong><?php the_field('name'); ?></strong>
	          <em><?php the_field('position'); ?></em>
               </span>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
         </li>
         
         <li class="nav-five">
            <?php query_posts('post_type=team&p=649'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-five" class="boxgrid captionfull">
                <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
               <span class="cover boxcaption">
                  <strong><?php the_field('name'); ?></strong>
	          <em><?php the_field('position'); ?></em>
               </span>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
         </li>
         
         <li class="nav-six last">
            <?php query_posts('post_type=team&p=650'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#tab-six" class="boxgrid captionfull">
                <?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); ?>
               <img src="<?php echo $image[0]; ?>" width="140" height="200" alt="<?php get_the_title(get_field('image')) ?>" />
               <span class="cover boxcaption">
                  <strong><?php the_field('name'); ?></strong>
	          <em><?php the_field('position'); ?></em>
               </span>
            </a>
            <?php endwhile; endif; wp_reset_query(); ?>
         </li>
      </ul>
      
      <div class="grid_9">
         <h1><?php the_title(); ?></h1>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>	
         <?php endwhile; endif; ?>
      </div>
      
      <div id="sidebar" class="grid_3">
         <?php wp_nav_menu( array( 'theme_location' => 'about-us' ) ); ?>
      </div>
      
      <div class="grid_9 list-wrap">
         <ul id="tab-one"> 
            <?php query_posts('post_type=team&p=639'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
          <ul id="tab-two" class="hide"> 
            <?php query_posts('post_type=team&p=643'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
          <ul id="tab-three" class="hide"> 
            <?php query_posts('post_type=team&p=647'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
          <ul id="tab-four" class="hide"> 
            <?php query_posts('post_type=team&p=648'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
          <ul id="tab-five" class="hide"> 
            <?php query_posts('post_type=team&p=649'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
          <ul id="tab-six" class="hide"> 
            <?php query_posts('post_type=team&p=650'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="team-photo"><?php the_post_thumbnail(); ?></li>
               <li class="team-content">
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>  
              </li>
            <?php endwhile; endif; ?>  
          </ul>
          
       </div>
    </div> 
  </div>
  

<q class="grid_12">'...it was like working with colleagues; they spoke my language'</q>

<?php get_footer(); ?>       
       
		


 
           
          
        		 
        



	