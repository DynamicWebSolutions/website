<?php
/**
 * Template Name: Page - with Sidebar
 *
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
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
         
         	<div class="span8">
            
            
            <?php $value = get_field( "logo_1" );
			if( $value ) { ?>
            
              <div class="row">
              	<div class="span8">
                	<div class="logoplus">
                	
                			<?php echo wp_get_attachment_image(get_field('logo_1'), 'full', true); ?>
                		
                			<img src="<?php bloginfo('template_directory'); ?>/img/plus.png" alt="plus" />
                		
                 			<?php echo wp_get_attachment_image(get_field('logo_2'), 'full', true); ?>
						</div>
                	</div>
                </div> 
                
                <?php } ?>
                
          		<div class="content">
         
       				<?php the_content();?>
               
         		</div> 
                
                <?php while(the_repeater_field('features')): ?>
        
  				<div class="row">
        
   	   				<div class="span8 divider2">
    	  		      <h2><?php the_sub_field('feature-headline'); ?></h2>
    	  		  </div>
      
     				<div class="span2 feature-graphic">
         		 		 <?php $value = get_sub_field( "feature-graphic" );
							if( $value ) { echo wp_get_attachment_image(get_sub_field('feature-graphic'), 'slider-thumb', true); }
							else { echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/logo-bug.png" />'; } ?>
       				</div>
            
					<div class="span6">
          			  	<p class="p1"><?php the_sub_field('feature-text'); ?></p>
          			  	<?php $value = get_sub_field( "feature-link" );
                    	if( $value ) { ?>
						<p><a href="<?php the_sub_field('feature-link') ?>" class="btn btn-info" data-type="submit">Learn More</a></p> 				
						<?php } ?>
   					</div>
      
       
 				</div> <!-- /row -->
        
				<?php endwhile; // end repeater ?> 

                
              
				
        	</div><!-- /span8 -->
            
            <div class="span4">
            
            	<?php if ( has_post_thumbnail() ) { ?><span class="page-icon"><?php the_post_thumbnail('page-icon'); ?></span><?php } ?>

				<?php get_sidebar(); ?>
      
 			</div> <!-- /span4 -->
       
       </div> <!-- /row2 -->
      
	</div> <!-- /container -->
  
</section>

 <?php endwhile; // end of the loop. ?>
 


<?php get_footer(); ?>
