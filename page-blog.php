<?php
/**
 * Template Name: Blog Page
 * Description: Page template to display blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=205831512815667";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php while ( have_posts() ) : the_post(); ?>
  
<section id="content">
  
	<div class="container">
    
    	<div class="row">
        
        	<div class="span12">
        
        		<h1>Dynamic Web Solutions <?php the_title();?></h1>
                
                <?php the_content();
    			endwhile;
          		 // end of the loop
    			
         		 // resetting the loop
    			?>
            
            </div>
            
        </div> <!-- /row1 -->
        
            
        <div class="row">
         
         	<div class="span8">
            
    			<?php
              	// Blog post query
    			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    			query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>0) );
    			if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    			
                <div id="blog-post" <?php post_class(); ?>>
      				<a class="blog-post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h2><?php the_title();?></h2></a>
      				<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
      			
               		<div class="row">
        		
               
                
        				<div class="span8">
         					<?php the_excerpt();?>
       					</div><!-- /.span8 -->
                
               		 	<hr />
                        
            		</div> <!-- /row -->
   				
                </div><!-- /.post_class -->
                
				<?php endwhile; endif; ?>
 		
				<?php bootstrapwp_content_nav('nav-below');?>

			</div><!-- /.span8 -->

			<div class="span4">
            
				<?php get_sidebar('blog'); ?>

     		</div> <!-- /span4 -->
     			
  		</div><!-- /.row -->
       
	</div>
    
</section>
        
<?php get_footer(); ?>