<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="Middle">
<div class="container">
<div class="Welcme">

<?php while ( have_posts() ) : the_post(); ?>
				
				

			
<div class="edit_cont">
<?php get_template_part( 'content', 'page' ); ?>

</div>

<div class="Video"><?php echo get_post_meta($post->ID, 'video', true); ?></div>
<?php endwhile; // end of the loop. ?>

</div>


<div class="Services">
<ul>
<?php query_posts( 'cat=5' ); 
        if (have_posts()) : while (have_posts()) : the_post(); ?>    
<li>
<div class="thumbnail"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></div>
<p class="Light16 Bold Link1 Align_cent"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
</li>
 <?php endwhile; else: ?>
            <?php endif; ?>


</ul>



</div>



			
	

<?php //get_sidebar( 'front' ); ?>
<?php get_footer(); ?>