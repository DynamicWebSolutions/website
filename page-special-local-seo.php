<?php
/**
 * Template Name: Page - Holy Grail
 * Description: A full-width template with minimal headers and footers
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

//<!--==============================methods=================================-->


add_action('wp_enqueue_scripts', 'dws_local_seo_magic');
function dws_local_seo_magic() {
	wp_register_script('skrollr', get_stylesheet_directory_uri() .  'js/skrollr.min.js', false, '0.6.27', true);
	wp_enqueue_script('skrollr');
}


//<!--==============================content=================================-->


get_header(); 


  

if( have_posts() ) : 
	while ( have_posts() ) : 
		the_post(); 
 
		the_content();
                    

	endwhile; 
endif;
		

get_footer(); 





