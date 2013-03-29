<?php

if ( function_exists('register_sidebar') )
    register_sidebar(array('name' => 'Sidebar','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'Insights','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'Insights Details','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'Community','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'Careers','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'News','before_widget' => '<div class="box">','after_widget' => '</div>',));
    register_sidebar(array('name' => 'Homepage','before_widget' => '<div class="box">','after_widget' => '</div>',));
    
    
register_post_type('team', array(
'label' => 'Team',
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => true,
'rewrite' => array('slug' => 'team'),
'query_var' => true,
'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
) );

add_theme_support('post-thumbnails', array( 'post', 'page', team ) );    

function register_my_menus() {
  register_nav_menus(
    array(
      'topnav' => __( 'Top Menu' ),
      'expertise' => __( 'Expertise' ),
      'insights' => __( 'Insights' ),
      'case-studies' => __( 'Case Studies' ),
      'about-us' => __( 'About Us' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


# Displays the comment authors gravatar if available
function dp_gravatar($size=50, $attributes='', $author_email='') {
global $comment, $settings;
if (dp_settings('gravatar')=='enabled') {
if (empty($author_email)) {
ob_start();
comment_author_email();
$author_email = ob_get_clean();
}
$gravatar_url = 'http://www.gravatar.com/avatar/' . md5(strtolower($author_email)) . '?s=' . $size . '&amp;d=' . dp_settings('gravatar_fallback');
?><img src="<?php echo $gravatar_url; ?>" <?php echo $attributes ?>/><?php
}
}

# Custom excerpt lenght
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '"></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


# Adds excerpts for pages
add_post_type_support( 'page', 'excerpt' );

# Shortcode in widgets
add_filter('widget_text', 'do_shortcode');

# PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// Limit Post Title
function shortened_title() {
$original_title = get_the_title();
$title = html_entity_decode($original_title, ENT_QUOTES, "UTF-8");
// Set Limit
$limit = "55";
// Set End Text
$ending="...";
if(strlen($title) >= ($limit+3)) {
$title = substr($title, 0, $limit) . $ending; }
echo $title;
}


add_filter('iphorm_description_3', 'mytheme_change_form_description', 10, 2);

function mytheme_change_form_description($description, $form)
{
    global $post;
    if (isset($post)) {
        return 'Please complete the short form below if you would like a PDF copy of ' . $post->post_title . '';
    }
    return $description;
}

remove_filter('term_description','wpautop');

class WPMUDEV_Update_Notifications {}

?>