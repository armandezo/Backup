<?php if ( get_option_mmtheme('featured_slider') == 'true' ) { ;?> 
  <div class="block black">			

 
 
 
 
 
<?php if( is_home() ){ ?> 

<div class="galleryhome">
<div class="flexslider newslider mask slider-slide"> 
    <ul class="slides slideset">
<?php $recent = new WP_Query("cat=".get_option('slider_cats_area')."&showposts=6"); while($recent->have_posts()) : $recent->the_post();?>  
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'sliderbig' ); ?></a>
										
										<div class="info">
											<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?> </h2></a>
											<div class="holder">
												<a href="<?php the_permalink(); ?>" class="btn-more"><?php _e( 'Leer Más', 'mm' ); ?></a>
												<strong class="by"><?php _e( 'POR', 'mm' ); ?> <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s', 'mm'), get_the_author() ); ?>"><?php the_author(); ?></a></span> <span class="date"><?php the_time('F j, Y') ?></span></strong>
											</div>
										
										</div> 
									</li>
<?php endwhile; ?> 
   </ul>


   
</div>
<div class="flexslider carousel newslider mask slider-thumbs">

    <ul class="slides buttons">
<?php $recent = new WP_Query("cat=".get_option('slider_cats_area')."&showposts=6"); while($recent->have_posts()) : $recent->the_post();?>
									<li>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'slidersmall' ); ?>
											<?php the_title(); ?> 
										</a>
									</li>
<?php endwhile; ?>   
        </ul>    

        
</div>
</div>


				
				
				<aside class="news-block">
					<h3><?php _e( 'Últimas Noticias', 'mm' ); ?></h3>
						<div id="scrollbar1">
						<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
						<div class="viewport">
						<div class="overview">
							<ul class="list-news">
<?php $recent = new WP_Query("cat=".get_option('featured_area_sidebar')."&showposts=".get_option_mmtheme('sidebarpost_number').""); while($recent->have_posts()) : $recent->the_post();?>  
								<li>
									<figure class="image">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'slidersmall' ); ?></a>
									</figure> 
									<div class="news">
										<span class="time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</div>
								</li>
<?php endwhile; ?> 
							</ul>
						</div>
						</div>
						</div>
					</aside>
				</div>
 
       

 

 
<?php } } ?>