<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css" media="screen" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" media="screen"   />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_front_page()){?>
<header id="header">
<?php }else{?>
<header id="header-inner-page">
<?php }?>
<div class="Headr_top ">
<div class="container">
<div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="img" border="0"></a></div>

<div class="Top_right">
<div class="row">
<div class="top_menu"><span>W&auml;scherei Weisse Wolke</span>   |   <span>Rosenstrasse 22</span>    |   <span>40882 Ratingen</span>
<?php //wp_nav_menu( array( 'menu' => 'Home Top Menu','after' => '<li class="menu-divider"> | </li>')); ?>
</div>

<div class="call"><?php dynamic_sidebar('phone');?></div>

</div>


<div class="navigation ">

<nav id="Main_menu"><a class="toggleMenu" href="#">Menu</a>
<div class="Menubx">
<?php wp_nav_menu( array( 'menu' => 'Home Menu')); ?>
	
</div></nav>

</div>

</div>
</div>
</div>



<?php if(is_front_page()){?>
<div class="Banner">

 <div class="container">
 <div class="content">
 <?php dynamic_sidebar('banner_content');?>

 
 
 </div>
 
 <div class="thumbnail"> <?php dynamic_sidebar('banner_image');?></div>
 
  </div>
</div>
<?php }?>
</header>