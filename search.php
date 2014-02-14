<?php
/**
 *
 * Search Template
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
<section id="content">

	<div class="container">
    
    	<div class="row">
        
        	<div class="span12">
            
				<?php if ( have_posts() ) : ?>
  
     
        		<h1><?php printf( __( 'Search Results for: %s', 'bootstrapwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
       
 
				<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h2> <?php the_title();?></h2></a>
				<p><?php the_excerpt();?></p>
				<hr />

				<?php endwhile; ?>
				<?php else : ?>
 
       			 <h1><?php _e( 'No Results Found', 'bootstrapwp' ); ?></h1>
    			 <p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.', 'bootstrapwp' ); ?></p>


				<div class="well">
					
				<?php get_search_form(); ?>

				</div><!--/.well -->
				
				<?php endif ;?>
				
			</div>

		</div>
			

	</div> <!-- /container -->
    
</section>

<?php get_footer(); ?>