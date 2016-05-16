<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="timetable">
<div class="cent">
<?php dynamic_sidebar('offnungszeiten');?>

</div>

</div>

</div>
</section>
	<footer class="Footer" >
<div class="container">
<div class="Footr_left">
<div class="menu_footer row Light13 White Offset3"><?php wp_nav_menu( array( 'menu' => 'Footer menu','after' => '<li class="menu-divider"> | </li>')); ?></div>
<div class=" row Light13 grey1 Link2">Copyright &copy; 2015 alle Rechte vorbehalten. <a href="<?php echo home_url();?>/impressum/">Impressum</a> </div>


</div>

<div class="Footr_rgt Light13 White">
<?php dynamic_sidebar('footer_content');?>


</div>


</div>
</footer>

 <!--[if !lte IE 6]><!-->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr.min.js"></script> <![endif]-->
	
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>


<!--<![endif]-->
<?php wp_footer(); ?>

</body>
</html>
