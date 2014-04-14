<?php
/**
 * Template Name: Home Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 */
get_header(); ?>


<!--============================== slider =================================-->

<section class="slider">

 <div class="flex-container">
 
	<a class="left-nav"></a>
	<a class="right-nav"></a>
  

	<div class="flexslider">
    	<ul class="slides">
        
			<?php $my_query = new WP_Query('post_type=slide&posts_per_page=6');
  			while ($my_query->have_posts()) : $my_query->the_post();
 			$do_not_duplicate = $post->ID;?>
            
		

			<li>
        	<div class="container">
        		<div class="row">
            	    <div class="span10 offset1">
                    
                    	<?php if ( has_post_thumbnail() ) { ?>
          				<div class="slider-img">
                        <?php the_post_thumbnail('slider-thumb'); ?>
              			</div>
                        <?php } ?>
                        
                		<div class="slider-text">
                		<h1><?php the_title();?></h1>
						<?php the_content();?>
                        
                		<a class="btn" href="<?php the_field('slide_link'); ?>">Learn More</a>
                		</div>
                        
            		</div>
				</div>
			</div>    
			</li>
            
            <?php endwhile; ?>
            
            
    	</ul>
  	</div> 
    
</div>  <!-- /flex-container -->


</section> <!-- /slider -->


<!--============================== content =================================-->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container">
     
    <div class="row">
      <div class="span12">
      
      	<!-- row 1 -->
        <ul class="thumbnails thumbnails_2">
        	<?php while(the_repeater_field('top-services')): ?>
            
          <li class="span4">
            <div class="thumbnail_2"> <?php echo wp_get_attachment_image(get_sub_field('home-icon'), 'home-icon', true); ?>
              <div>
                  <h2><a href="<?php the_sub_field('home-link'); ?>"><?php the_sub_field('home-headline'); ?></a></h2>
                  <p class="p1"><?php the_sub_field('home-text'); ?></p>
                  <p><a href="<?php the_sub_field('home-link'); ?>">Learn more</a></p>
              </div>
            </div>
          </li>
          	<?php endwhile; // end repeater ?> 
        </ul>
        
        <!-- row 2 -->
        <ul class="thumbnails thumbnails_2">
        	<?php while(the_repeater_field('bottom-services')): ?>
            
          <li class="span4">
            <div class="thumbnail_2"> <?php echo wp_get_attachment_image(get_sub_field('home-icon-bottom'), 'home-icon', true); ?>
              <div>
                  <h2><a href="<?php the_sub_field('home-link-bottom'); ?>"><?php the_sub_field('home-headline-bottom'); ?></a></h2>
                  <p class="p1"><?php the_sub_field('home-text-bottom'); ?></p>
                  <p><a href="<?php the_sub_field('home-link-bottom'); ?>">Learn more</a></p>
              </div>
            </div>
          </li>
          	<?php endwhile; // end repeater ?> 
        </ul>
       
      
      </div>
    </div>
    
    <?php endwhile; endif;?>
    
<!--============================== blog =================================-->


		<div class="row">
			<div class="span12">
				<div class="divider"><span>OUR LATEST THOUGHTS</span></div>

					<?php $blog_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2));
					while ($blog_posts->have_posts()) : $blog_posts->the_post();?>

						<article>
							<h2><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h2>
							<p><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)?></p>
						</article>

					<?php endwhile;?>

			</div> 
		</div>
	
  


<!--============================== companies =================================-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="row">
    <div class="span12">
      <div class="divider"><span>COMPANIES WE'VE WORKED WITH</span></div>
      
                
                <div class="clients-holder">
               
       			<ul id="ourclients">
            	<?php while(the_repeater_field('client_logos')): ?>
                 <li><?php echo wp_get_attachment_image(get_sub_field('client_logo'), 'client-logo', true); ?></li>
                 <?php endwhile; // end repeater ?> 
                 </ul>
                 
                  <!-- navigation holder -->
                <div class="holder holder-our-clients">
                </div>
             </div>
             
              
                 
			<!--<div class="clients-carousel">
  				<ul class="slides">
                <?php while(the_repeater_field('client_logos')): ?>
					<li style="width:100%"><img src="<?php the_sub_field('client_logo'); ?>" alt=""></li>
                       <?php endwhile; // end repeater ?> 
				</ul>
             </div> -->
            
    	</div>
  	</div>
  
   
       
</div> <!-- /container -->



        
<!--============================== orange section =================================-->


  
<section class="section-3">
	<div class="container">
      	<div class="row">
        
        	<div class="span8">
            	<div>
					<?php the_content();?>
                </div>
        	</div>
        
         	<div class="span4">   
            	<div class="mailchimp">
         		<h2>GET EMAIL UPDATES</h2>
				<p>Keep in touch with us & hear about the most recent news/tips.</p>
            	
                <form action="http://dynamicwebsolutions.us2.list-manage1.com/subscribe/post?u=663c3bb7267265a1cd33fde57&amp;id=505cacaa44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
					<fieldset>
                    	<span class="email">
                        <input type="text" value="Enter your email address" name="EMAIL" class="email-input" id="mce-EMAIL" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" ><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success">
                         </span>
					</fieldset>	
				</form>

         		
         		</div>
      		</div>
            
    	</div>
	</div>
</section>



<?php endwhile; endif; ?>
  

<?php get_footer();?>
