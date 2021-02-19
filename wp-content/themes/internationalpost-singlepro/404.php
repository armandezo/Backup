<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div id="content-wrapper" class="site-content">
<div id="content" role="main" class="single-wrapper">
<section>
			<div style="font-family:'Droid Serif',Georgia,Sans-serif; font-size: 20px;margin-top: 8px;line-height:27px;margin-left:8px;">
<center><h2><?php _e("*404* - Not Found", "mm"); ?> </h2></center><br />
<?php _e("Sorry, we can't find the content you're looking for at this URL. Please navigate from the navigation menu on top or try searching below..", "mm"); ?><br /><br />
 <center> <?php get_search_form( ); ?> </center>

 
</div>
</section>
			</div><!-- #content -->

<?php include("sidebar-archive.php"); ?> 
<?php get_footer(); ?>
