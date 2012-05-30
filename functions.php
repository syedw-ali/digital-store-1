<?php
$current_path = dirname(__FILE__);
require_once($current_path. '/theme-options.php');
require_once( $current_path. '/meta-box/functions.php');
require_once( $current_path. '/best-sell.php');


add_action( 'after_setup_theme', 'my_setup' );
if ( !function_exists('my_setup') ):
function my_setup(){	
	add_theme_support( 'post-thumbnails' );			// This theme uses post thumbnails
	set_post_thumbnail_size( 304, 304 ); 
	
	add_image_size( 'slide-image', 	700, 369 );
	add_image_size( 'large-image', 	304, 304 );
	add_image_size( 'thumb-image', 	180, 160 );
	add_image_size( 'prd-thumb-image', 	80, 80 );
	add_image_size( 'feat-prd-image', 	240, 123 );	
}
endif;
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'TopRight' => __( 'Top right Menu' ),
			'Primary' => __( 'Primary Menu' ),
			'FooterOne' => __( 'Footer One Menu' ),
			'FooterTwo' => __( 'Footer Two Menu' ),
			'FooterThree' => __( 'Footer Three Menu' )
		)
	);
}

// Create Home page

$name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name='Home'");
if ($name != '') {
	//
} else { 
	global $user_ID;
	$post = array();
	$post['post_type']    = 'page'; //could be 'post' for example
	$post['post_content'] = esc_attr('hello world!!');
	$post['post_author']  = null;
	$post['post_status']  = 'publish'; //draft
	$post['post_title']   = 'Home';
	$postid = wp_insert_post ($post);
	if ($postid == 0)
	    echo 'Screwed';
	else
	    echo 'Cool';
} 

// Use a static front page
$home = get_page_by_title( 'Home' );
update_option( 'page_on_front', $home->ID );
update_option( 'show_on_front', 'page' );


// Only posts into search results
function mySearchFilter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','mySearchFilter');



add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	
		/*General Sidebar*/
		$general_search=array(
			'id' => 'general_search',
			'name' => __( 'Add your widget' ),
			'description' => __( 'Add your widget' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		);
		
				
		/* Register the sidebars. */
		register_sidebar( $general_search );
		
}
// Get the current category id if we are on an archive/category page
function getCurrentCatID(){
	global $wp_query;
	if(is_category() || is_single()){
		$cat_ID = get_query_var('cat');
	}
	return $cat_ID;
}

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('feat-upload', WP_CONTENT_URL.'/themes/digital/js/featupload.js', array('jquery','media-upload','thickbox'));

	wp_enqueue_script('feat-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
	
}

// These actions were called for both category and store extra fields. We can't use more than one of each fucntion in one theme.
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

function best_sell(){?>
	<h4><?php echo get_option('best_sell'); ?></h4>

	<?php $pieces = explode(" ", get_option('best_sell_id')); 
	//print_r($pieces); ?>
		
	<div class="block_content">
		<ul>
		<?php
			$args_2= array(
			//'posts_per_page'=>5,
			'post-type' => 'post',
			'post__in' => $pieces,
			'ignore_sticky_posts' => 1
			);
		query_posts($args_2); 
		$i=1;
		while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" title="<?php the_title();?>"><span><?php echo $i .'&#46;' . '&nbsp;' ?></span><?php the_title();?></a>
			</li>
		<?php $i++; endwhile; ?>	
		</ul>
		<div class="clearblock"></div>
	</div>


<?php }
?>