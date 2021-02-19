<?php get_header(); ?>
<div id="content-wrapper" class="site-content">


<div id="content" role="main" class="single-wrapper"> 

<section>
<div class="post-wrapper-archive">
<div class="related-post-wrapper-block">
<div class="recentpost-wrapper"> 	
		 <?php $count = 0; ?>
    	<?php if (have_posts()) : ?>
        <?php while (have_posts() && $count < get_option('posts_per_page') && (($count < '1'))) : the_post(); $count++; ?>
           <div class="cat-title-b0-1"> 
		   <h1><center>
			<span><?php _e("You Are Browsing ", "mm"); ?> <b>&#8216;<?php single_cat_title(); ?>&#8217;</b> <?php _e("Category ", "mm"); ?></span>
			<center></h1>
				<div class="cb"></div> 
 </div>
  
<div class="recentpost">
<div class="content-heading"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2>  

 
</div>
  <?php if( has_post_thumbnail() ) { ?>
<div class="recentpost-image-0"><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'contentbigcat' ); ?></a></div>
<div class="recentpost-cont-holder"> 
<div class="post-content-big"><?php the_content_limit('305'); ?>
	

<div class="readmore-b0"> <a href="<?php the_permalink(); ?>"><?php _e("More...", "mm"); ?> </a></div> 
</div>
</div>

<div class="cb"></div>
<?php } else { ?> 
<div class="recentpost-image-0">
	<?php the_content_limit('305'); ?><div class="readmore-b0"> <a href="<?php the_permalink(); ?>"><?php _e("More...", "mm"); ?> </a></div>
	</div>
	
<?php } ?> 
 




</div>

		<?php endwhile; ?>
 
		</div>   
		 </div>
    
 
<?php if ( get_option_mmtheme('ad_6_on_off') == 'true' ) { ;?> 
<div class="ad-6">
<?php echo stripslashes( get_option_mmtheme('ad_6') ) ?>  		
</div>
<?php } ?> 




<div class="bottom-recentpost-wrapper-cat">
<?php while (have_posts() && $count < get_option('posts_per_page') && (($count < '10'))) : the_post(); $count++; ?>
   <?php if( has_post_thumbnail() ) { ?>
<div class="bottom-archive">
<div class="bottom-recentpost-image-0"><a href="<?php the_permalink(); ?>" rel="bookmark">

 <?php the_post_thumbnail( 'contentsmall' ); ?> </a>  </div>
<div class="post-content-holder">
<div class="bottom-content-heading-0"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> 

 
</div> 
<div class="cb"></div>
<div class="post-content">  <?php the_content_limit('150'); ?></div>
</div>
<div class="cb"></div>
</div>
<?php } else { ?> 
 
<div class="post-content-holder bottom-archive no-img-bottom-archive">
 <div class="bottom-content-heading-0"> <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> 
 </div> 
   <div class="cb"></div>
<div class="post-content">  <?php the_content_limit('370'); ?>  </div>

   <div class="cb"></div>

	</div>
	
<?php } ?> 
    	<?php endwhile; endif; ?>   
    	
 
    	
    	
      <div class="cb"></div>
    </div> 
 






 
<?php if ( get_option_mmtheme('ad_7_on_off') == 'true' ) { ;?> 
<div class="ad-7">
<?php echo stripslashes( get_option_mmtheme('ad_7') ) ?>  		
</div>
<?php } ?> 




<div id="pag">
 <div class="pagination-wrapper"><?php magazine3_pagination(); ?></div>
<div class="cb"></div>
</div> 
      
</div>

</section>


 

			</div><!-- #content -->
<?php include("sidebar-archive.php"); ?> 
<?php get_footer(); ?>
