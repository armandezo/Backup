<?php get_header(); ?>

<div id="content-wrapper" class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
	<div id="content" role="main" class="single-wrapper">

<?php the_breadcrumb(); ?>
		<header class="entry-header-single">
			<h1 class="entry-title single-entry-title"> <?php the_title(); ?></h1>

			<div class="single-meta">
				<div class="info">
				 <span class = "POR"> <?php _e("POR", "mm"); ?> </span>  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title=" <?php printf( esc_attr__( 'Ver todas las entradas de %s', 'mm'), get_the_author() ); ?>"><?php the_author(); ?> </a>	|  <span class="date"> <?php the_time('l, M j, Y') ?>  </span>
				 <?php edit_post_link( __( '  Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?><span class="counter"> | <?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?> views</span>

				</div>
				<div class="single-cat">  <?php the_tags('', '' ); ?> </div>
			</div> 
		</header><!-- .entry-header -->

			<?php if ( get_option_mmtheme('ad_4_on_off') == 'true' ) { ;?>
			<div class="ad4">
				<?php echo stripslashes( get_option_mmtheme('ad_4') ) ?>
			</div>
			<?php } ?>
   
		<section> 
			<?php get_template_part( 'content', 'single' ); ?>  

 

			<?php comments_template( '', true ); ?>
		 
		<?php endwhile; // end of the loop. ?>
		</section>
	
	</div><!-- #content -->

	<?php include("sidebar-single.php"); ?>
	<div class="cb"></div>
</div><!-- #content-wrapper -->

<?php get_footer(); ?>