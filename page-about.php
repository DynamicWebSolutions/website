<?php
/**
 * Template Name: About Us Page
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
            
                    <div class="content">
                    
					<?php the_content();?>
                    
                    </div>

            	</div>
           
     		</div>

		</div> <!-- /row2 -->
  
        
   		<?php while(the_repeater_field('bios')): ?>
        
  		<div class="row">
        
   	   		<div class="span12 divider2">
    	        <h2><?php the_sub_field('bio-name'); ?></h2>
    	    </div>
      
     		<div class="span4">
          		 <?php $value = get_sub_field( "bio-photo" );
					if( $value ) { echo wp_get_attachment_image(get_sub_field('bio-photo'), 'about-us', true); }
					else { echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/logo-bug.png" />'; } ?>
       		</div>
            
			<div class="span8">
          	  	<p class="p1"><?php the_sub_field('bio-text'); ?></p>
                
                <ul class="badges">
				<?php while(the_repeater_field('badges')): ?>
                	<li><?php $value = get_sub_field( "badge" );
					if( $value ) { echo wp_get_attachment_image(get_sub_field('badge'), 'slider-thumb', true); } ?></li>
                <?php endwhile; // end badges repeater ?> 
                <div class="clear"></div>
                </ul>
               
   			</div>
      
       
 		</div> <!-- /row3 -->
        
		<?php endwhile; // end bios repeater ?> 

   
	</div> <!-- /container -->
    
</section>
  
   
<?php endwhile; // end of the loop. ?>
		

<?php get_footer(); ?>