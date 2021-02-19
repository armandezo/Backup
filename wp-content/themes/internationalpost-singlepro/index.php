<?php get_header(); ?> 
<div class="hgroup"><hgroup>
<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup></div>

 <?php get_template_part( 'featured', get_post_format() );?>
 
<?php if ( get_option_mmtheme('ad_2_on_off') == 'true' ) { ;?> 
<div class="ad-2">
<?php echo stripslashes( get_option_mmtheme('ad_2') ) ?>  		
</div>
<?php } ?>  	

<!-- Featured Area Starts-->
<?php if ( get_option_mmtheme('featured_area_on_off') == 'true' ) { ;?> 
<?php $featured_area_1 = get_option('featured_area_1'); ?> 
<?php /* Category credentials */
$category_id = $featured_area_1;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
					<div class="block posts">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?> 

						<div class="post">
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2>
							<figure class="image">
								<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'featuredbig' ); ?></a>
				 
								<div class="title">
									<?php _e("by", "mm"); ?>  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?> </a>  - <?php the_time('j F Y') ?>
								</div>
							</figure>
							<?php the_content_limit('305'); ?>

						</div>
<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?> 
				
						<ul class="list-posts">
		<?php $query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?> 					
							<li>
								<figure class="image">
									<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'featuredsmall' ); ?></a>
									<div class="title">
										<?php _e("by", "mm"); ?>  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?> </a>  - <?php the_time('j F Y') ?>
									</div>
								</figure>
								<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
							</li>
<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>						
						</ul>
					</div>
<!-- Featured Area Ends-->
<?php } ?>  
				</div>

<?php if ( get_option_mmtheme('ad_3_on_off') == 'true' ) { ;?> 
<div class="ad-3">
<?php echo stripslashes( get_option_mmtheme('ad_3') ) ?>  		
</div>
<?php } ?>  	



<!-- Block 1 Starts-->	
<?php if ( get_option_mmtheme('b1_on_off') == 'true' ) { ;?>
<?php
$b1_cat = get_option('b1_cat');
?> 
<?php /* Category credentials */
$category_id = $b1_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block1">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>		 				 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles"> 
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 1 Ends-->



<!-- Block 2 Starts-->	
<?php if ( get_option_mmtheme('b2_on_off') == 'true' ) { ;?>
<?php
$b2_cat = get_option('b2_cat');
?> 
<?php /* Category credentials */
$category_id = $b2_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block2">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 2 Ends-->


<!-- Block 3 Starts-->	
<?php if ( get_option_mmtheme('b3_on_off') == 'true' ) { ;?>
<?php
$b3_cat = get_option('b3_cat');
?> 
<?php /* Category credentials */
$category_id = $b3_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block3">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 3 Ends-->


<!-- Block 4 Starts-->	
<?php if ( get_option_mmtheme('b4_on_off') == 'true' ) { ;?>
<?php
$b4_cat = get_option('b4_cat');
?> 
<?php /* Category credentials */
$category_id = $b4_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block4">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 4 Ends-->



<!-- Block 5 Starts-->	
<?php if ( get_option_mmtheme('b5_on_off') == 'true' ) { ;?>
<?php
$b5_cat = get_option('b5_cat');
?> 
<?php /* Category credentials */
$category_id = $b5_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block5">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 5 Ends-->



<!-- Block 6 Starts-->	
<?php if ( get_option_mmtheme('b6_on_off') == 'true' ) { ;?>
<?php
$b6_cat = get_option('b6_cat');
?> 
<?php /* Category credentials */
$category_id = $b6_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block6">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 6 Ends-->



<!-- Block 7 Starts-->	
<?php if ( get_option_mmtheme('b7_on_off') == 'true' ) { ;?>
<?php
$b7_cat = get_option('b7_cat');
?> 
<?php /* Category credentials */
$category_id = $b7_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block7">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 7 Ends-->



<!-- Block 8 Starts-->	
<?php if ( get_option_mmtheme('b8_on_off') == 'true' ) { ;?>
<?php
$b8_cat = get_option('b8_cat');
?> 
<?php /* Category credentials */
$category_id = $b8_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block8">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 8 Ends-->



<!-- Block 9 Starts-->	
<?php if ( get_option_mmtheme('b9_on_off') == 'true' ) { ;?>
<?php
$b9_cat = get_option('b9_cat');
?> 
<?php /* Category credentials */
$category_id = $b9_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block9">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 9 Ends-->



<!-- Block 10 Starts-->	
<?php if ( get_option_mmtheme('b10_on_off') == 'true' ) { ;?>
<?php
$b10_cat = get_option('b10_cat');
?> 
<?php /* Category credentials */
$category_id = $b10_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
				<div class="box block10">
					<div class="political-info">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=0&posts_per_page=1&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

						<h2> <a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php echo ($category_name); ?></a></h2>
						<div class="block">
							<div class="info">
								<article class="article">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h3>
<?php if( has_post_thumbnail() ) { ?> 
									<div class="holder">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blockbig' ); ?></a>						 
										<?php the_content_limit(' 398'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } else { ?> 
									<div class="holder no-thumb-big">										 
										<?php the_content_limit(' 598'); ?>
										<div class="more">
											<a href="<?php the_permalink(); ?>"><?php _e("read more", "mm"); ?></a>
										</div>
									</div>
<?php } ?>
								</article>
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								<ul class="list-articles">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=1&posts_per_page=2&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<?php if( has_post_thumbnail() ) { ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blocksmall' ); ?></a>						
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>
				<?php } else { ?> 
									<li class="no-thumb">												
										<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
									</li>

				<?php } ?>
 					
<?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
								</ul>
							</div>
							<aside class="more-political">
								<h3><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></h3>
								<ul class="headlines-list">
<?php 	$query = new WP_Query();
		$query->query('ignore_sticky_posts=1&offset=3&posts_per_page=5&cat=' . $category_id);
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></li>
<?php endwhile; else: ?><?php endif; ?>								
								</ul>
							</aside>
						</div>
						<div class="more-news">
							<a href="<?php echo ($category_link); ?>" title="<?php echo ($category_name); ?>"><?php _e("More", "mm"); ?> <?php echo ($category_name); ?> <?php _e("news", "mm"); ?></a>							 
						</div>
<?php wp_reset_query(); ?>
					</div>
				</div>
<?php } ?>
<!-- Block 10 Ends-->

 
		
 
<?php get_footer(); ?>