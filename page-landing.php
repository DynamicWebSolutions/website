<?php
/**
 * Template Name: Dynamic Title
 *
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 */


$title = (isset($_GET['form_name'])) ? get_the_title() . ', ' . $_GET['form_name'] . '!' : get_the_title() . ', there!';

get_header(); ?>

  
<!--==============================content=================================-->

<style>
h1 {
	text-transform: capitalize;
}
</style>

<?php while ( have_posts() ) : the_post(); ?>
  
<section id="content">
  
	<div class="container">
            
        <div class="row">
         
         	<div class="span8">
            
          		<div class="content">
                
	            	<h1><?php echo $title; ?></h1>
	     
	       				<?php the_content();?>
               
	         		</div> 
				
        	</div><!-- /span8 -->
            
            <div class="span4">
            
            	<?php if ( has_post_thumbnail() ) { ?><span class="page-icon"><?php the_post_thumbnail('page-icon'); ?></span><?php } ?>

				<div id="sidebar">

				<?php dynamic_sidebar("sidebar-contact"); ?>

				</div>
      
 			</div> <!-- /span4 -->
       
       </div> <!-- /row2 -->
      
	</div> <!-- /container -->
  
</section>

 <?php endwhile; // end of the loop. ?>
 


<?php get_footer(); ?>
