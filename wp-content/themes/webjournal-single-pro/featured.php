			<article class="container">
				<div id="slider" class="holder flexslider"> 
<ul class="slides">
<?php
$slider_cats_area = get_option('big_slider_cats_area');
?>
<?php /* Category credentials */
$category_id = $slider_cats_area;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>   
            <?php $query = new WP_Query();
        	$query->query('ignore_sticky_posts=1&posts_per_page=3&cat=' . $category_id);
		    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?> 
			<li>

<?php if((get_post_meta($post->ID, "meta-slidertitle", true))) { ?>
<h1><a href="<?php the_permalink()?>"><?php echo get_post_meta($post->ID, 'meta-slidertitle' , true);?></a></h1><?php } else { ?>
 <?php } ?>

		 		<h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2> 
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'main_post' ); ?></a>
					<div class="text">
						<strong class="AUTOR"><?php _e('POR','mm');?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></strong>
						<p><?php the_content_limit(550); ?></p>
						<div class="link-holder"> 
							<a href="<?php the_permalink(); ?>"><?php _e('CONTINûE LEYENDO','mm');?></a>
						</div>
					</div> 
					</li>
            <?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
</ul>
				</div>

        <div id="carousel" class="flexslider slider_sidebar"> 
			<ul class="sub-nav slides">  
			<?php $slider_cats_area = get_option('big_slider_cats_area'); ?>
<?php /* Category credentials */ 
$category_id = $slider_cats_area;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>   
            <?php $query = new WP_Query();
        	$query->query('ignore_sticky_posts=1&posts_per_page=3&cat=' . $category_id);
		    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?> 

							<li>
<?php if((get_post_meta($post->ID, "meta-slidertitle", true))) { ?>
<a href="#"><?php echo get_post_meta($post->ID, 'meta-slidertitle' , true);?></a>
<?php } else { ?>
<a class="smalltitles" href="#"><?php the_title(); ?></a>
<?php } ?>

							</li>
						
            <?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?> 
			</ul>
        </div>

			</article> 
