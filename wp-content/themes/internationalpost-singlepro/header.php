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
<link rel="profile" href="http://gmpg.org/xfn/11" /> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Cabin:700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>


 
 <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>


<![endif]-->
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

<?php mmtheme_get_google_font( get_option_mmtheme( 'body_postpage_font' ) ) ?> 
<?php mmtheme_get_google_font( get_option_mmtheme( 'slider_cats_area' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h1_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h2_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h3_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h4_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h5_font' ) ) ?> 
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h6_font' ) ) ?> 


 <style>
.single-wrapper .entry-content p, .single-wrapper .entry-content  {font-size: <?php get_option_mmtheme( 'postcontent_font_size' , true) ?>px !important; }
 .entry-content h1 {font-family: <?php get_option_mmtheme( 'body_h1_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h1_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h1_font_color' , true) ?> ;}
 .entry-content h2 {font-family: <?php get_option_mmtheme( 'body_h2_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h2_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h2_font_color' , true) ?> ;}
 .entry-content h3 {font-family: <?php get_option_mmtheme( 'body_h3_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h3_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h3_font_color' , true) ?> ;}
 .entry-content h4 {font-family: <?php get_option_mmtheme( 'body_h4_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h4_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h4_font_color' , true) ?> ;}
 .entry-content h5 {font-family: <?php get_option_mmtheme( 'body_h5_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h5_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h5_font_color' , true) ?> ;}
 .entry-content h6 {font-family: <?php get_option_mmtheme( 'body_h6_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h6_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h6_font_color' , true) ?> ;}

.entry-content a {
 color: <?php get_option_mmtheme( 'body_link_color' , true) ?> !important;
text-decoration : none;
}
.entry-content a:hover	{
 color:<?php get_option_mmtheme( 'body_link_hover_color' , true) ?> !important;
text-decoration : none;}

/* Block color style*/
.block1 .political-info{border-color:<?php get_option_mmtheme( 'b1_color' , true) ?>;}
.block1 .political-info h2 a{color: <?php get_option_mmtheme( 'b1_color' , true) ?>;}
.block1 .more-political h3 {background: <?php get_option_mmtheme( 'b1_color' , true) ?>;}

.block2 .political-info{border-color:<?php get_option_mmtheme( 'b2_color' , true) ?>;}
.block2 .political-info h2 a{color: <?php get_option_mmtheme( 'b2_color' , true) ?>;}
.block2 .more-political h3 {background: <?php get_option_mmtheme( 'b2_color' , true) ?>;}

.block3 .political-info{border-color:<?php get_option_mmtheme( 'b3_color' , true) ?>;}
.block3 .political-info h2 a{color: <?php get_option_mmtheme( 'b3_color' , true) ?>;}
.block3 .more-political h3 {background: <?php get_option_mmtheme( 'b3_color' , true) ?>;}

.block4 .political-info{border-color:<?php get_option_mmtheme( 'b4_color' , true) ?>;}
.block4 .political-info h2 a{color: <?php get_option_mmtheme( 'b4_color' , true) ?>;}
.block4 .more-political h3 {background: <?php get_option_mmtheme( 'b4_color' , true) ?>;}

.block5 .political-info{border-color:<?php get_option_mmtheme( 'b5_color' , true) ?>;}
.block5 .political-info h2 a{color: <?php get_option_mmtheme( 'b5_color' , true) ?>;}
.block5 .more-political h3 {background: <?php get_option_mmtheme( 'b5_color' , true) ?>;}

.block6 .political-info{border-color:<?php get_option_mmtheme( 'b6_color' , true) ?>;}
.block6 .political-info h2 a{color: <?php get_option_mmtheme( 'b6_color' , true) ?>;}
.block6 .more-political h3 {background: <?php get_option_mmtheme( 'b6_color' , true) ?>;}

.block7 .political-info{border-color:<?php get_option_mmtheme( 'b7_color' , true) ?>;}
.block7 .political-info h2 a{color: <?php get_option_mmtheme( 'b7_color' , true) ?>;}
.block7 .more-political h3 {background: <?php get_option_mmtheme( 'b7_color' , true) ?>;}

.block8 .political-info{border-color:<?php get_option_mmtheme( 'b8_color' , true) ?>;}
.block8 .political-info h2 a{color: <?php get_option_mmtheme( 'b8_color' , true) ?>;}
.block8 .more-political h3 {background: <?php get_option_mmtheme( 'b8_color' , true) ?>;}

.block9 .political-info{border-color:<?php get_option_mmtheme( 'b9_color' , true) ?>;}
.block9 .political-info h2 a{color: <?php get_option_mmtheme( 'b9_color' , true) ?>;}
.block9 .more-political h3 {background: <?php get_option_mmtheme( 'b9_color' , true) ?>;}

.block10 .political-info{border-color:<?php get_option_mmtheme( 'b10_color' , true) ?>;}
.block10 .political-info h2 a{color: <?php get_option_mmtheme( 'b10_color' , true) ?>;}
.block10 .more-political h3 {background: <?php get_option_mmtheme( 'b10_color' , true) ?>;}
</style>
 

<?php wp_head(); ?> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" type="text/css" media="screen" /> 

<?php if ( get_option_mmtheme('featured_slider') == 'true' ) { ;?> 
 <style>.ad-2{margin-top:-18px !important}</style> <?php } ?>
</head>
<body <?php body_class(); ?>>

<?php if ( get_option_mmtheme('ad_1_on_off') == 'true' ) { ;?> 
<div class="ad-1">
<?php echo stripslashes( get_option_mmtheme('ad_1') ) ?>  		
</div>
<?php } ?>  

 	<div id="wrapper">
<div class="top1"><a name="top"></a></div>
		
		<header id="header" class="singleheader">
			<div class="top-panel">
				<div class="container">
					<nav>
<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'first', 'container_id' => 'topMenu', 'container_class' => 'ddsmoothmenu','top-row', 'fallback_cb'=>'primarymenu1') );?>
					</nav> 

					<ul class="social"> 
							<?php if ( get_option_mmtheme('social8_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social8_link') ) ?>" class="rss">rss</a></li>
							<?php 	} ?>									
							<?php if ( get_option_mmtheme('social11_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social11_link') ) ?>" class="vimeo">vimeo</a></li>
							<?php 	} ?>										
							<?php if ( get_option_mmtheme('social3_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social3_link') ) ?>" class="reddit">reddit</a></li>
							<?php 	} ?>	
							<?php if ( get_option_mmtheme('social10_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social10_link') ) ?>" class="twitter">twitter</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social12_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social12_link') ) ?>" class="youtube">youtube</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social7_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social7_link') ) ?>" class="pinterest">pinterest</a></li>
							<?php 	} ?> 
							<?php if ( get_option_mmtheme('social6_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social6_link') ) ?>" class="linkedin">linkedin</a></li>
							<?php 	} ?>	
							<?php if ( get_option_mmtheme('social5_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social5_link') ) ?>" class="gplus">gplus</a></li>
							<?php 	} ?>						
							<?php if ( get_option_mmtheme('social2_on_off') == 'true' ) { ;?>
							<li><a href="<?php echo stripslashes( get_option_mmtheme('social2_link') ) ?>" class="facebook">facebook</a></li>
							<?php 	} ?>
					</ul>
				</div>
			</div>
			<div class="topic-panel">
				<div class="container">
					<strong class="title"><?php _e( 'TENDENCIAS', 'mm' ); ?> </strong>
					<div class="topic-list">
						<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'second', 'container_id' => 'trending-menu', 'container_class' =>'trending', 'fallback_cb'=>'primarymenu2') );?>
					</div>
					<div class="cb"> </div>	
				</div>
			</div>
			<div class="container logo-holder">
				<div class="carousel">
					<?php if ( get_option_mmtheme('top_slider') == 'true' ) { ;?> 
					<div class="mask">
						<strong class="title"><?php _e( 'DE ÚLTIMO MINUTO', 'mm' ); ?></strong>

      <div id="banner-slide">
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
         <?php query_posts("cat=".get_option_mmtheme('top_slider_cat')."&showposts=7"); if (have_posts()) : while (have_posts()) : the_post();?>
         <li> <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a></li>
         <?php endwhile; ?>
         <?php endif; wp_reset_query(); ?> 	    						 
        </ul> 
        <!-- end Basic jQuery Slider --> 
      </div>


						 
					</div>	
					<?php } ?>  
				</div>


				 
					<div class="topsearch-wrapper">
<form method="get" id="footersearch1" action="<?php bloginfo('url'); ?>/">
<input type="text" name="s" value=" " onblur="if(this.value=='') this.value=' ';" onfocus="if(this.value==' ') this.value='';" id="s2" />
<input type="submit" value=" " id="searchsubmit" />
</form>


					</div>
					<div class="logo-wrapper">
					<div class="head-date"><?php echo date_i18n('F j, Y'); ?></div>
					<strong class="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_option_mmtheme( 'custom_logo_value' ) ?>" alt="" /> </a></strong>
					</div>	 
				<div class="cb"></div>
			</div>
			 


		<nav id="nav">
			<div class="responsivemenu"> <nav id="mobile-menu" role="navigation"></nav></div>
			<div class="menu">
<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'third', 'container_id' => 'menu-22', 'container_class' =>'ddsmoothmenu', 'menu-header', 'fallback_cb'=>'primarymenu3') );?> 
			</div>
		</nav>

			
			
 
		</header>

<section id="main">
<div class="container">
<div class="box">