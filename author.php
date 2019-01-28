<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */


$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

$photoID = intval(get_field('employee_mug', $curauth));


get_header(); ?>

<section id="content">
  
	<div class="container">
    
  	<div class="row">

			<div class="span4">

				<?php 
					echo '<h1 class="page-title author">'.$curauth->display_name.'</h1>';
					echo '<h3>'.get_field('employee_title', $curauth).'</h3>';
					echo wp_get_attachment_image( $photoID, 'medium'); 
					echo '<h4>Bio</h4>';
					echo wpautop(get_the_author_meta('description', $curauth->ID), true); 

					// check if the repeater field has rows of data
					if( have_rows('employee_certifications', $curauth) ):
						echo '<h4>Certifications</h4>';
						echo '<div class="row dws-certificates">';

					 	// loop through the rows of data
					  while ( have_rows('employee_certifications', $curauth) ) : the_row();
							
							// display a sub field value
							$certID = get_sub_field('employee_certificate', $curauth);

							echo '<div class="span2">'.wp_get_attachment_image( $certID, 'medium').'</div>';

					  endwhile;

						echo '</div>';

					endif;
				?>

   		</div> <!-- /span4 -->    	
         
     	<div class="span8">

	     	<h2>Recent Posts</h2>

			<?php 
				if ( have_posts() ) : 

					while ( have_posts() ) : the_post(); ?>
						<div <?php post_class(); ?>>
							<a class="blog-post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
								<h3><?php the_title();?></h3>
							</a>

							<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
							<?php the_excerpt();?>
							<hr />

						</div><!-- /.post_class -->
                            
					<?php 
						endwhile;

				else :

					echo '<h3>Searching for posts &hellip;</h3>';
					echo '<iframe src="https://giphy.com/embed/fAT2Db0j0Mblu?html5=true" width="480" height="270" frameBorder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

					echo '<p>No post found. Check back soon.</p>';

				endif; ?>
						
   		</div><!-- /.span8 -->
		</div><!-- /.row -->
	</div>
</section>

<?php get_footer(); ?>