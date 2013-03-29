<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<html lang="en-GB" class="no-js">
<head>


<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=4" />
<link rel="stylesheet" media="screen,print" href="<?php bloginfo('template_directory'); ?>/grid.css" />
<!--[if IE 7]>
   <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie7.css" />
<![endif]-->   
<!--[if IE 8]>
   <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie8.css" />
<![endif]--> 


<title><?php wp_title(); ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script type="text/javascript" src="//use.typekit.net/pus4xvq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/organictabs.jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.10.1.custom.min.js"></script>
<script type='text/javascript'>
    $(function() {
        $("#tabs").organicTabs({
            "speed": 200
        });
    });

$(document).ready(function(){
   $('.boxgrid.captionfull').hover(function(){
      $(".cover", this).stop().animate({bottom:'0'},{queue:false,duration:160});
   }, function() {
      $(".cover", this).stop().animate({bottom:'-44px'},{queue:false,duration:160});
   });
   
   $('.showhidetarget').hide();
   $('a.showhidetrigger').click(function () {
      $('.showhidetarget').toggle(100);
      });
   });
</script>

<?php wp_head(); ?>
</head> 

<body <?php body_class(); ?>>
   <div class="container_12" id="wrapper">	
      <header>
         <div id="logo" class="grid_4"><a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo( 'template_url' ); ?>/images/adsatis-logo.jpg" width="299" height="90" alt="<?php the_title(); ?>" /></a></div>
         <div class="grid_8">	
            <?php include ('searchform.php'); ?> 
            <?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?> 
         </div>
      </header>
      
	