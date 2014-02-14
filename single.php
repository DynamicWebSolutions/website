<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>
  
<section id="content">
  
	<div class="container">
    
    	<div class="row">
        
     
         
         	<div class="span8">
            
    			<header class="post-title">
        			<h1><?php the_title();?></h1>
      			</header>
       
   					<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            		<?php the_content();?>
            		<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
					<?php endwhile; // end of the loop. ?>
<!-- <span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_fblike_hcount' displayText='Facebook Like'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_digg_hcount' displayText='Digg'></span>
<span class='st_email_hcount' displayText='Email'></span> -->
<br/>
					<hr />
 					<?php comments_template(); ?>

					<?php bootstrapwp_content_nav('nav-below');?>
    
			</div><!-- /.span8 -->

			<div class="span4">
            
				<?php get_sidebar('blog'); ?>

     		</div> <!-- /span4 -->
            
            
     			
  		</div><!-- /.row -->
       
	</div>
    
</section>
        
<?php get_footer(); ?>
