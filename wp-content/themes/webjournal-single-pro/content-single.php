<div id="single-heading-content"> 
 

 
 <div class="single-right-big"> 
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
		<?php the_content( __( 'Continúe leyendo <span class="meta-nav">&rarr;</span>', '_mm' ) ); ?>
<?php wp_link_pages(array('Antes' => '<center style="background:#ddd; font-size: 14px;font-weight: bold;margin: 8px;padding: 7px 4px;"><strong>Pages:</strong>', 'Después' => '</center>', 'next_or_number' => 'number')); ?> 
	    </div><!-- .entry-content -->
 	</article><!-- #post-<?php the_ID(); ?> -->
 
            <?php if ( get_option_mmtheme('ad_5_on_off') == 'true' ) { ;?> 
            <div class="ad5">
                <?php echo stripslashes( get_option_mmtheme('ad_5') ) ?>
            </div>
            <?php } ?> 


<!-- Sharing bar start -->
<div class="m3_socialbar">
<div class="m3_socialbar_left"> <?php _e("¿Te gusta? Compártelo!", "mm"); ?> </div>

<div class="m3_socialbar_right">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "> 
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52235a154c50b0dd"></script>
<!-- AddThis Button END -->
</div>
<div class="cb"></div>
</div>
            <?php if(function_exists('about_this_author')) { echo about_this_author(); } ?>

 
<div class="navpost">

<div id="post-nav">
    <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <div class="prev-nav">
            <a class="previous" href="<?php the_permalink(); ?>">&laquo; Historia anterior</a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
         </div>
    <?php 
                wp_reset_postdata();
            } //end foreach
        } // end if
        
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="next-nav">
            <a class="next" href="<?php the_permalink(); ?>">Historia siguiente &raquo;</a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
         </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
</div>



     <div class="cb"></div>
</div>    




 <?php if ( get_option_mmtheme('related_posts') == 'true' ) { ;?> 
<div class="single-related-big"> 
<div class="cat-links-holder-single"><?php _e("Más noticias relacionadas", "mm"); ?> </div> 
<div class="single-related-big-wrapper">
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
	?>	<div class="related-left-big">
 	<div class="relatedpost">
<a class="relatedpost-listing" href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail('relatedpostimg'); ?></a>
<span><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></span> 
<?php the_content_limit(170); ?>

	</div>
    	</div> 
        <?php endwhile; } wp_reset_query(); } ?> 
</div>
</div>
<?php } ?> 
 
</div><!-- .single-right -->

<div class="cb"></div> 
</div>
 