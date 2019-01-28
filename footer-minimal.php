<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 */
?>


<!--==============================footer=================================-->
<footer>
<a href="https://www.google.com/maps/place/Dynamic+Web+Solutions/@37.5350131,-77.4239607,17z/data=!4m2!3m1!1s0x89b1111974bd9c77:0x2f4e617853a91d1b" title="Open in Google Maps" target="_blank"><div id="locator-map"></div></a>
  <div class="footer-2">
    <div class="container">
      	<div class="row">
        	<div class="span8 clearfix">
 				<div class="row">
              <div class="span8">
		   <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'footer-menu',
              'container_class' => 'nav-footer',
              'menu_class'      => 'nav',
              'fallback_cb'     => ''
            
          ) ); ?>
          </div></div>
          
              <div class="row">
              <div class="span8">
             <?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-left"); ?>
             </div>
          	</div>
              </div>
            <div class="span4">
             
             <?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-right"); ?>
            </div>
              
         </div>
     </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0018/0081.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>


</body>
</html>