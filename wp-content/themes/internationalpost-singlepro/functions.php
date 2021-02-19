<?php require( get_template_directory() . '/includes/jetpack-carousel.php' ); 
 if(function_exists('grunion_media_button')) { ?>
<?php } else { ?>
<?php require( get_template_directory() . '/includes/grunion-contact-form/grunion-contact-form.php' ); ?>
<?php }  
 add_filter( 'the_category', 'add_nofollow_cat' ); 
function add_nofollow_cat( $text ) { 
$text = str_replace('rel="category tag"', "", $text); return $text; } 


function magazine3_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 0 && $showitems < $pages) echo "<a class='firstpag' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class='lastpag' href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

function the_content_limit($max_char, $more_link_text = ' ', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);
  if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
       echo "<p>";
        echo $content;
     echo "...<a href='"; the_permalink(); echo "'>"."</a>";
        echo "</p>";
   }   else {
      echo "<p>";
      echo $content;
      echo "...<a href='"; the_permalink(); echo "'>"."</a>";
      echo "</p>";
   }
}  
/* THUMBNAIL */
if( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );	  
	
	add_image_size( 'featuredbig', 644, 322, true ); 
	add_image_size( 'featuredsmall', 316, 176, true ); 
	add_image_size( 'blockbig', 430, 210, true );
	add_image_size( 'blocksmall', 74, 58, true ); 
	add_image_size( 'sliderbig', 710, 401, true );
	add_image_size( 'slidersmall', 80, 50, true );
	add_image_size( 'scrollerimage', 60, 49, true );
    add_image_size( 'contentbigcat', 370, 215, true );
    add_image_size( 'contentsmall', 195, 110, true );
    add_image_size( 'popular-thumb', 84, 55, true );      
	add_image_size( 'sidebar-thumb', 50, 50, true ); 	
	add_image_size( 'secondpostimg', 104, 75, true ); 
	 
    }
/**
 * _s functions and definitions 
 *
 * @package _s
 * @since _s 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since _s 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_s_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since _s 1.0
 */
 
function _s_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/includes/core/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/includes/core/tweaks.php' );

 
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

 

}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since _s 1.0
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name' => ( 'Single Sidebar' ),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</div></aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div><div class="widget_container">',
	) );
		register_sidebar( array(
		'name' => ( 'Archive Sidebar' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</div></aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div><div class="widget_container">',
	) );
	
    register_sidebar( array(
	'name' => 'Footer Block 1',
'description' => __( 'Footer Block 1', "mm"),
	'before_widget' => ' <div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'	
) );
    register_sidebar( array(
	'name' => 'Footer Block 2',
'description' => __( 'Footer Block 2', "mm"),
	'before_widget' => ' <div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'	
) );
    register_sidebar( array(
	'name' => 'Footer Block 3', 
'description' => __( 'Footer Block 3', "mm"),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'	
) );
    register_sidebar( array(
	'name' => 'Footer Block 4', 
'description' => __( 'Footer Block 4', "mm"),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'	
) );	

}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles
 */
 function mm_admin_styles() {
	wp_enqueue_style('color-picker', get_template_directory_uri() .'/includes/overall.css');
}
add_action('admin_print_styles', 'mm_admin_styles');

function _s_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );
 
 /* -----------    Comments BOXES     --------------- */
 function thecomment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<div class="the-comment">
			<?php echo get_avatar($comment,$size='60'); ?>
			<div class="comment-arrow"></div>
			<div class="comment-box">	<div class="comment-author">
					<strong><?php echo get_comment_author_link() ?></strong>
					<small><?php printf(__('%1$s at %2$s', "mm"), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('Edit', "mm"),'  ','') ?> - <?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></small>
				</div>
				<div class="comment-text">
					<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.', "mm") ?></em>
					<br />
					<?php endif; ?>
					<?php comment_text() ?>
				</div> 	</div> 	</div>
                <?php } 


/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

	/*  MM Panel */
	require( get_template_directory() . '/includes/mm/mm.php' );
	require( get_template_directory() . '/includes/mm/mm-includes.php' );
	/* JS */
	require( get_template_directory() . '/includes/theme-js.php' );
	require( get_template_directory() . '/includes/w.php' );
	require( get_template_directory() . '/includes/update_notifier.php' );
