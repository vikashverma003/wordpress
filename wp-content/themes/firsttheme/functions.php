<?php
register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'footer' => __('Footer Menu',       'My_First_WordPress_Theme'),
	
    
));


function learningwordpress_resources()
{
	
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningwordpress_resources');



/*  get top ancestor id */



function get_top_ancestor_id()
{
	
	
	global $post;
	
	if($post->post_parent){
		
	$ancestor = array_reverse(get_post_ancestors($post->ID));
	
	return $ancestor[0];

	}
	
	return $post->ID;
	
}

/*   Does pages have children */

function has_children()
{
	
	global $post;
	
	$pages = get_pages('child_of=' .$post->ID);
	
	
	return count($pages);
	
	
}



/** customize word count length **/


function custom_excerpt_length()
{
	
	return 25;
	
}

add_filter('excerpt_length',custom_excerpt_length );



/* add the featured image */

/*  add featured image support in wordpress */

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
	add_image_size('small-thumbnail',180,120, true );
	add_image_size('banner-image',920,220, array('left', 'top') );
	
	/* add post format in wordpress */
	
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );

	
	
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );





?>