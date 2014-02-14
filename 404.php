<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>



<section id="content">

	<div class="container">
    
    	<div class="row">
        
        	<div class="span12">

 
     		
            
        		<h1><?php _e( 'Oops!', 'bootstrapwp' ); ?></h1>
       			<p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bootstrapwp' ); ?></p>
      		
	  
        	

			<div class="well">
					<?php get_search_form(); ?>
			</div><!--/.well -->



					
                        
                     
					
</div></div></section>



<?php get_footer(); ?>