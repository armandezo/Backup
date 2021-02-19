<?php get_header(); ?>

	<div id="content-wrapper" class="site-content">
<div id="content" role="main" class="single-wrapper">
 	<header class="page-header">
					<h1 class="page-title">
						  <div id="newsmenu">	<div id="newsmenu0">
	<h1><?php printf( __( 'Search Results for: %s', 'mm' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</div><div class="cb"></div>  </div>
					</h1>
					 
				</header>
 
<section> 

				<?php /* Start the Loop */ ?>
		<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

					
					<?php	get_template_part( 'content','archive', get_post_format() );		?>




				<?php endwhile; ?>
<div id="pag">
 <div class="pagination-wrapper"><?php magazine3_pagination(); ?></div>
<div class="cb"></div>
</div> 

<?php else : ?>

			 
<div class="post-wrapper-archive">
				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
 </div>

		<?php endif; ?>

</section>

			

 
			</div><!-- #content -->


<?php include("sidebar-archive.php"); ?> 
<?php get_footer(); ?>
