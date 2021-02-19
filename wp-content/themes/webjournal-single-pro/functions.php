<?php  function the_breadcrumb() {
		echo '<ul id="crumbs">';
	if (!is_home()) {
		echo '<span>TU ESTÁS AQUÍ: <span><li><a class="homecrumb" href="';
		echo get_option('Home');
		echo '"> ';
		echo 'INICIO';
		echo "</a> / </li>";
if (is_category() || is_single()) {
			echo ' <li>  ';
			the_category(' </li><li>, ');
			if (is_single()) {
				echo "</li>  ";
				
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		} 
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li> / Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li> / Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li> / Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li> / Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li> / Search Results"; echo'</li>';}
	echo '</ul>';
} 

 


 function remove_shortcode_from_index($content) {
  if ( is_home() ) {
    $content = strip_shortcodes( $content );
  }
  return $content;
}
add_filter('the_content', 'remove_shortcode_from_index');

function postimage($size=medium) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 5,
		'post_mime_type' => 'image',))) 
	{
		foreach( $images as $image ) {
			$attachmenturl=get_attachment_link($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );

			echo '<a href="'.$attachmenturl.'" class="home-gallery-item" rel="lightbox">'.$attachmentimage.'</a>';
		}
	} else {
		echo "No Image";
	}
} 
include("includes/update_notifier.php");     
require( get_template_directory() . '/includes/jetpack-carousel.php' ); 


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
         echo "</div> \n";
     }
}

$prefix = 'dbt_';
 

add_action('admin_menu', 'mytheme_add_box');

// Add meta box
function mytheme_add_box() {
	global $meta_box;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>';
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
				}
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mytheme_save_data');

// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
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
     echo "...<a href='"; the_permalink(); echo "'>".' '."</a>";
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
/* Old Thumbs */	   
    add_image_size( 'popular-thumb', 84, 55, true );  
	add_image_size( 'sidebar-thumb', 50, 50, true );  
	add_image_size( 'contentsmall', 195, 110, true );
 
/* New Thumbs */  
	add_image_size( 'sliderimg', 889, 371, true ); 
//	add_image_size( 'block1img', 276, 157, true );
	add_image_size( 'block2big', 280, 175, true );
	add_image_size( 'block2small', 170, 114, true ); 
	add_image_size( 'block3img', 140, 100, true );
	add_image_size( 'tabbig', 420, 210, true );
	add_image_size( 'tabsmall', 92, 61, true );
	add_image_size( 'relatedpostimg', 200, 112, true );  


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
	load_theme_textdomain( '_mm', get_template_directory() . '/languages' );

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
		'name' => ( 'Sidebar' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s widget_container">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
		register_sidebar( array(
		'name' => ( 'Single Sidebar' ),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s widget_container">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
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


/* other M3 files */  
//require( get_template_directory() . '/inc/custom-header.php' );

	/*  MM Panel */
	require( get_template_directory() . '/includes/mm/mm.php' );
	require( get_template_directory() . '/includes/mm/mm-includes.php' );
	/* JS */
	require( get_template_directory() . '/includes/theme-js.php' );
	require( get_template_directory() . '/includes/w.php' );