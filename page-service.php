<?php
/**
 * Template Name: Page - No Sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>


  
<!--==============================content=================================-->

<?php while ( have_posts() ) : the_post(); ?>

<section id="content">

	<div class="container">
    
    	<div class="row">
        
        	<div class="span12">
        
        		<h1><?php the_title();?></h1>
            
            </div>
            
        </div> <!-- /row1 -->
  
 		<div class="row">
            
			<div class="span12">
            
            	
            	<div>
   
           			<span class="page-icon right"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('page-icon'); } ?></span>
            
           			<?php $value = get_field( "logo_1" );
					if( $value ) { ?>
            
              
                	<div class="logoplus">
                		<div class="span3">
                			<?php echo wp_get_attachment_image(get_field('logo_1'), 'full', true); ?>
                		</div>
                		<div class="span1">
                			<img src="<?php bloginfo('template_directory'); ?>/img/plus.png" alt="plus" />
                		</div>
                		<div class="span3">
                 			<?php echo wp_get_attachment_image(get_field('logo_2'), 'full', true); ?>
						</div>
                	</div>
                 
                
                	<?php } ?>
                    
                    <div class="content">
                    
					<?php the_content();?>
                    
                    </div>

            	</div>
           
     		</div>

		</div> <!-- /row2 -->
  
        
   		<?php while(the_repeater_field('features')): ?>
        
  		<div class="row">
        
   	   		<div class="span12 divider2">
    	        <h2><?php the_sub_field('feature-headline'); ?></h2>
    	    </div>
      
     		<div class="span4 feature-graphic">
          		 <?php $value = get_sub_field( "feature-graphic" );
					if( $value ) { echo wp_get_attachment_image(get_sub_field('feature-graphic'), 'slider-thumb', true); }
					else { echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/logo-bug.png" />'; } ?>
       		</div>
            
			<div class="span8">
          	  	<p class="p1"><?php the_sub_field('feature-text'); ?></p>
                	<?php $value = get_sub_field( "feature-link" );
                    if( $value ) { ?>
					<p><a href="<?php the_sub_field('feature-link') ?>" class="btn btn-info" data-type="submit">Learn More</a></p> 				
					<?php } ?>
   			</div>
      
       
 		</div> <!-- /row3 -->
        
		<?php endwhile; // end repeater ?> 

   
	</div> <!-- /container -->
    
</section>
  
   
<?php endwhile; // end of the loop. ?>
		

<?php get_footer(); ?>