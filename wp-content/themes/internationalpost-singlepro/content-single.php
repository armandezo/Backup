<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>
<div id="single-heading-content">
	
	<!-- MetaData -->
<?php if ( get_option_mmtheme('meta_data') == 'true' ) { ;?>	
 
<div class="single-left">
<div class="postedby"> <?php _e("Categorized as", "mm"); ?>  </div>
<div class="single-category"><?php the_category(); ?></div>


<div class="counter"><?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?></div>
  


<?php
$tag = get_the_tags();
if (! $tag) { ?>
<?php } else { ?>
<div class="postedby">
<?php _e("Tagged as", "mm"); ?> 
</div>
<?php } ?>



<div class="single-tags"> <?php the_tags('' , ''); ?></div>
 

 
 
<div class="cat-links-single cat-links-padding-social">
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_tweet" addthis:title="<?php the_title(); ?> - <?php the_permalink(); ?>"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php the_permalink(); ?>"  addthis:title="<?php the_title(); ?> - <?php the_permalink(); ?>"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_button_pinterest_pinit" pi:pinit:url="<?php the_permalink(); ?>" pi:pinit:media="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $thumb['0']; ?>" pi:pinit:layout="horizontal"></a> 
</div>
</div>

<?php if ( get_option_mmtheme('related_posts') == 'true' ) { ;?> 
<div class="single-related"> 
<div class="cat-links-holder-single"><?php _e("Related", "mm"); ?> </div> 
<?php $categories = get_the_category($post->ID);
		if ($categories) { $category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID), 
		'showposts'=> get_option_mmtheme('relatedpost_number'),
		'ignore_sticky_posts'=>1
		);
		$my_query = new WP_Query($args);		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); 
	?>	<div class="related">
 	<div class="relatedpost">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('secondpostimg'); ?></a>
<h3><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> 
	</div>
    	</div> 
        <?php endwhile; } wp_reset_query(); } ?>
</div>
<?php } ?> 
</div><!-- .single-left -->

<!-- MetaData -->
 
<div class="single-right">
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_s' ) ); ?>
<?php wp_link_pages(array('before' => '<center style="background:#ddd; font-size: 14px;font-weight: bold;margin: 8px;padding: 7px 4px;"><strong>Pages:</strong>', 'after' => '</center>', 'next_or_number' => 'number')); ?> 
	    </div><!-- .entry-content -->
 	</article><!-- #post-<?php the_ID(); ?> -->
 
 
</div><!-- .single-right -->
<?php } else { ?> 
 <div class="single-right-big">
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_s' ) ); ?>
<?php wp_link_pages(array('before' => '<center style="background:#ddd; font-size: 14px;font-weight: bold;margin: 8px;padding: 7px 4px;"><strong>Pages:</strong>', 'after' => '</center>', 'next_or_number' => 'number')); ?> 
	    </div><!-- .entry-content -->
 	</article><!-- #post-<?php the_ID(); ?> -->
 
 
</div><!-- .single-right -->
<?php } ?>
<div class="cb"></div> 

