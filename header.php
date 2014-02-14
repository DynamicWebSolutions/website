<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * 
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<title><?php
  	global $page, $paged;
  	wp_title( '|', true, 'right' );
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_home() || is_front_page() ) )
    	echo " | $site_description";
  	if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );
  	?></title>  
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- open graph -->  
	<?php if (is_single()) { ?>  
	<meta property="og:url" content="<?php the_permalink() ?>"/>  
	<meta property="og:title" content="<?php single_post_title(''); ?>" />  
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
	<meta property="og:type" content="article" />  
	<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />    
	<?php } else { ?>  
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />  
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />  
	<meta property="og:type" content="website" />  
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/logo.png" /> <?php } ?> 
    
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

  	<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-57-precomposed.png">
    
<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/ie7.css" />
<![endif]-->
<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
<script async defer src="//survey.g.doubleclick.net/async_survey?site=52vxrzitvshsi"></script>
</head>
  	
<body <?php body_class(); ?>>
	<header>
      	<div class="container">
      		<div class="row">
        		<div class="span12 clearfix">
          			<div class="navbar navbar_ clearfix">
              			<div class="container">
						 <div class="brand">
         				 <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          				</div>
          
          				<div class="phone"> (804) 303-2883
           				<div class="mobile-btn">
           				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="btn-navbar-text">MENU</span>
          				</button>
          				</div>
          				</div>
          
         				<br />
         
		  				<?php
           				/** Loading WordPress Custom Menu  **/
           				wp_nav_menu( array(
              			'menu'            => 'main-menu',
              			'container_class' => 'nav-collapse',
              			'menu_class'      => 'nav',
			  			'depth'			=> '2',
              			'fallback_cb'     => '',
              			'menu_id' => 'main-menu',
              			'walker' => new Bootstrapwp_Walker_Nav_Menu()
          				) ); ?>
          
      					</div>
      				</div>
      			</div>
      		</div>
  		</div>  
  	</header>
    <!-- End Header -->
<!-- Begin Template Content -->