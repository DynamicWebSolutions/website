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
              
        <div class="content">
                    
					<?php the_content();?>
                    
        </div>

    	</div>

		</div> <!-- /row2 -->

     <h2>Meet Our Staff</h2>

    <div class="row dws-employees">    

      <?php
        $blogusers = get_users( 
          array( 
            'who' => 'authors', 
            'orderby' => 'registered' 
          ) 
        );

        // Array of WP_User objects.
        foreach ( $blogusers as $user ) {
          if(!get_field('employee_active', $user)) continue;

          $photoID = intval(get_field('employee_mug', $user));
          echo sprintf(
            '<div class="span2">
              <a class="dws-tooltip" href="%s" title="%s, %s">%s</a>
            </div>',
            get_author_posts_url($user->ID),
            $user->display_name,
            get_field('employee_title', $user),
            wp_get_attachment_image( $photoID, 'medium', false, array('class' => 'img-circle'))
          );
        }

      ?>

    </div>

    <h2>How We Roll</h2>

    <div class="row">
      <div class="span12">
        <?php echo do_shortcode('[instagram-feed cols=10 num=30 showbutton=false]'); ?>
      </div>
    </div>


  </div>
</section>

<script>
  jQuery(document).ready(function() {
      jQuery('.dws-tooltip').tooltip({
        trigger: 'hover',
        placement: 'bottom'
      });
  });
</script>

<?php 
endwhile;
  
get_footer(); ?>