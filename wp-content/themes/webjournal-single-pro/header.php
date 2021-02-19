<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php if ( get_option_mmtheme('seo_on_off') == 'true' ) { ; ?> 
<!-- Magazine3 SEO Starts- http://magazine3.com/ -->
<title><?php m3_titles(); ?></title>
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php the_excerpt_rss(); ?>" />
<meta name="keywords" content="<?php echo get_option_mmtheme( 'homepage-seo-keyword' ) ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php echo get_option('blogdescription'); ?>" />
<meta name="keywords" content="<?php echo get_option_mmtheme( 'homepage-seo-keyword' ) ?>" /> <?php endif; ?>
<?php if ( get_option_mmtheme('canonical_on_off') == 'true' ) { ;?> 
<?php #homepage urls
if (is_home() )echo '<link rel="canonical" href="'.get_bloginfo('url').'" />';
#single page urls 
global $wp_query; 
$postid = $wp_query->post->ID; 
if (is_single() || is_page()) echo '<link rel="canonical" href="'.get_permalink().'" />';	
#index page urls
if (is_archive() || is_category() || is_search()) echo '<link rel="canonical" href="'.get_permalink().'" />';	
?> <?php } ?> 
<?php rel_next_prev(); ?>  
<?php m3_indexing(); ?>
<!-- Magazine3 SEO ENDS- http://magazine3.com/ -->
<?php } elseif ( ( get_option_mmtheme('seo_on_off') == 'false' ) ) {  ?>	 
<title>
 <?php wp_title(' '); ?>
 <?php if(wp_title(' ', false)) { echo '|'; } ?> 
 <?php bloginfo('name'); ?>
 </title>
<?php } ?>
<meta name="generator" content="Magazine3 Framework" />
<!-- OpenGraph Facebook Start --> 
<?php if (is_single()) { ?>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<?php function og_meta_desc() {
	global $post;
	$meta = strip_tags($post->post_content);
	$meta = strip_shortcodes($meta);
	$meta = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), ' ', $meta);
	$meta = substr($meta, 0, 200);
	if ( $meta != '' ) {
		echo "<meta property=\"og:description\" content=\"$meta...\" />";
	} else {
		echo "<meta property=\"og:description\" content=\"Here is some cool new content.  Check it out.\" />";
	}
} og_meta_desc(); ?> 
<meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" /> <?php } else { } ?>
<!-- OpenGraph Facebook Ends -->
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h1_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h2_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h3_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h4_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h5_font' ) ) ?> 
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h6_font' ) ) ?> 

<style>
.entry-content a {
 color: <?php get_option_mmtheme( 'body_link_color' , true) ?> !important;
text-decoration : none;
}
.entry-content a:hover	{
 color:<?php get_option_mmtheme( 'body_link_hover_color' , true) ?> !important;
text-decoration : none;
}
 

.single .entry-content h1 {font-family: <?php get_option_mmtheme( 'body_h1_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h1_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h1_font_color' , true) ?> ;}

.single .entry-content h2 {font-family: <?php get_option_mmtheme( 'body_h2_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h2_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h2_font_color' , true) ?> ;}

.single .entry-content h3 {font-family: <?php get_option_mmtheme( 'body_h3_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h3_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h3_font_color' , true) ?> ;}

.single .entry-content h4 {font-family: <?php get_option_mmtheme( 'body_h4_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h4_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h4_font_color' , true) ?> ;}

.single .entry-content h5 {font-family: <?php get_option_mmtheme( 'body_h5_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h5_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h5_font_color' , true) ?> ;}

.single .entry-content h6 {font-family: <?php get_option_mmtheme( 'body_h6_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h6_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h6_font_color' , true) ?> ;}


.tab-category .one {border-color:  <?php get_option_mmtheme( 'tab1color' , true) ?> !important;}
.tab-category .two{border-color:  <?php get_option_mmtheme( 'tab2color' , true) ?> !important;}
.tab-category .three{border-color: <?php get_option_mmtheme( 'tab3color' , true) ?> !important;} 
.tab-category .four{border-color:  <?php get_option_mmtheme( 'tab4color' , true) ?> !important;}
.tab-category .five{border-color:  <?php get_option_mmtheme( 'tab5color' , true) ?> !important;}
.tab-category .six{border-color:  <?php get_option_mmtheme( 'tab6color' , true) ?> !important;} 
.tab-category .seven{border-color:  <?php get_option_mmtheme( 'tab7color' , true) ?> !important;}
.tab-category .eight{border-color:  <?php get_option_mmtheme( 'tab8color' , true) ?> !important;}
.tab-category .nine{border-color:  <?php get_option_mmtheme( 'tab9color' , true) ?> !important;}

.tab-category .active .one, .tab-category .one:hover, .resp-tab-active .one, .tab1-more-news .titel {background: <?php get_option_mmtheme( 'tab1color' , true) ?> !important;;}

.tab-category .active .two, .tab-category .two:hover, .resp-tab-active .two, .tab2-more-news .titel  {background: <?php get_option_mmtheme( 'tab2color' , true) ?> !important;}

.tab-category .active .three, .tab-category .three:hover, .resp-tab-active .three, .tab3-more-news .titel   {background: <?php get_option_mmtheme( 'tab3color' , true) ?> !important;} 

.tab-category .active .four, .tab-category .four:hover, .resp-tab-active .four, .tab4-more-news .titel   {background:  <?php get_option_mmtheme( 'tab4color' , true) ?> !important;}

.tab-category .active .five, .tab-category .five:hover, .resp-tab-active .five, .tab5-more-news .titel   {background: <?php get_option_mmtheme( 'tab5color' , true) ?> !important;}

.tab-category .active .six, .tab-category .six:hover, .resp-tab-active .six, .tab6-more-news .titel   {background: <?php get_option_mmtheme( 'tab6color' , true) ?> !important;} 

.tab-category .active .seven, .tab-category .seven:hover, .resp-tab-active .seven, .tab7-more-news .titel   {background: <?php get_option_mmtheme( 'tab7color' , true) ?> !important;}

.tab-category .active .eight, .tab-category .eight:hover, .resp-tab-active .eight, .tab8-more-news .titel   {background: <?php get_option_mmtheme( 'tab8color' , true) ?> !important;}

.tab-category .active .nine, .tab-category .nine:hover, .resp-tab-active .nine,  .tab9-more-news .titel   {background: <?php get_option_mmtheme( 'tab9color' , true) ?> !important;}
</style> 

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]--> 

<!-- old fonts--> 
 	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
 
<!-- New fonts-->

	<!--[if IE]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ie.js"></script><![endif]-->

<?php wp_head();?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" type="text/css" media="screen" />
 
</head>
<body <?php body_class(); ?>>
	
<div id="back-top"> 
	<a href="#top"><span>VAYA AL INICIO</span></a>  
</div>  
 
	<div id="wrapper">

<div class="hgroup"><hgroup>
<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup></div> 


		<header id="header">
			<div class="top-bar">

<div class="menu-holder-top"><nav id="nav" class="nav-bar top-menu">
  <div class="responsivemenu"> <nav id="mobile-menu" role="navigation"></nav></div>
		<div class="main-menu nav-bar">
			<?php
				if ( function_exists('wp_nav_menu') ) { 
   				  wp_nav_menu( array( 
      			   'theme_location' => 'first',
     			    'sort_column' => 'menu_order',
     			    'menu_class' => 'sf-menu',   
     			   'fallback_cb' => 'primarymenu1' 
     				  ));
   					  }
					 ?>
		</div>
</nav>
</div> 

				 <?php get_search_form(); ?>
			</div>
			<div class="top-box">
				<div class="logo">
					<a href="<?php echo get_option('home'); ?>">						
						<?php if ( get_option_mmtheme( 'custom_logo_value' ) ) { ?> 
						<img src="<?php echo get_option_mmtheme( 'custom_logo_value' ) ?>" alt="<?php bloginfo('name'); ?>" style="width:270px;margin-top:25px;" />
						<?php } else { ?> <span class="title"> <?php bloginfo('name'); ?> </span>
						<?php } ?>
						 </a> 

				</div> 
				<section class="socials-box">
					<strong class="titel">Síguenos en la web</strong>
					<ul>
						<?php if ( get_option_mmtheme('social1_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social1_link') ) ?>" class="twitter">twitter</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social2_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social2_link') ) ?>" class="facebook">facebook</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social3_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social3_link') ) ?>" class="linkedin">linkedin</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social4_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social4_link') ) ?>" class="gplus">gplus</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social5_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social5_link') ) ?>" class="flickr">flickr</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social6_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social6_link') ) ?>" class="vimeo">vimeo</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social7_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social7_link') ) ?>" class="youtube">youtube</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social8_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social8_link') ) ?>" class="pintrest">pintrest</a></li>
						<?php } ?>

						<?php if ( get_option_mmtheme('social9_on_off') == 'true' ) { ;?>
						<li><a href="<?php echo stripslashes( get_option_mmtheme('social9_link') ) ?>" class="rss">rss</a></li>
						<?php } ?>

 					</ul>
				</section>
				<div class="banner">
<?php if ( get_option_mmtheme('ad_1_on_off') == 'true' ) { ;?> 
<div class="ad1">
<?php echo stripslashes( get_option_mmtheme('ad_1') ) ?>  		
</div>  
<?php } ?>
				</div>
			</div>  
 


<div class="menu-holder category-nav"><nav id="nav" class="nav-bar">
  <div class="responsivemenu"> <nav id="mobile-menu" role="navigation"></nav></div>
		<div class="main-menu nav-bar">
			<?php
				if ( function_exists('wp_nav_menu') ) { 
   				  wp_nav_menu( array(  
      			   'theme_location' => 'second',
     			    'sort_column' => 'menu_order',
     			    'menu_class' => 'sf-menu',   
     			   'fallback_cb' => 'primarymenu2'  
     				  ));
   					  }
					 ?>
		</div>  
</nav>
</div>
		</header>
		