<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>

<div id="sidebar">



<?php
	if (is_tree('5')) {  
		dynamic_sidebar("sidebar-seo");	} 
	
	elseif (is_tree('7')) { 
		dynamic_sidebar("sidebar-ppc"); } 
		
	elseif (is_tree('83')) { 
		dynamic_sidebar("sidebar-analytics"); } 
		
	elseif (is_tree('80')) { 
		dynamic_sidebar("sidebar-conversion"); } 
		
	elseif (is_tree('86')) { 
		dynamic_sidebar("sidebar-design"); }
		
	elseif (is_tree('256')) { 
		dynamic_sidebar("sidebar-consulting"); }  
		
	elseif (is_tree('91') || is_tree('105') || is_tree('3979')) { 
		dynamic_sidebar("sidebar-contact"); } 
		
	else { dynamic_sidebar("sidebar-default"); }
?>

</div>
        

       

