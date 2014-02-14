<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>


<div id="sidebar" class="blog-sidebar">

<div class="well sidebar-nav">
            <?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("sidebar-posts"); ?>
		</div><!--/.well .sidebar-nav -->

</div>