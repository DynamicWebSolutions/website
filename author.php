<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php the_post(); ?>
    
    <section id="content">
  
	<div class="container">
    
    	<div class="row">
         
         	<div class="span8">
	
				<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'bootstrapwp' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
	
		<?php rewind_posts(); ?>
					
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
							<div <?php post_class(); ?>>
								<a class="blog-post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
								<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
									<?php the_excerpt();?>
									 <hr />
							</div><!-- /.post_class -->
                            
								<?php endwhile; ?>
							<?php endif; ?>
						
       		</div><!-- /.span8 -->

			<div class="span4">
            
				<?php get_sidebar('blog'); ?>

     		</div> <!-- /span4 -->
            
            
     			
  		</div><!-- /.row -->
       
	</div>
    
</section>

<?php get_footer(); ?>