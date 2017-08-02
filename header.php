<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urology
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
	 <a class="navbar-brand icon" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" alt="Logo strony"/></a>
       	</div><!--end navbar-header-->
        <div class="collapse navbar-collapse menu-primary navbar-right" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'menu'          	=> '',
                'theme_location'	=> 'primary',
                'depth'         	=> 2,
                'container'     	=> '',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'  	=> 'bs-example-navbar-collapse-1',
                'menu_class'    	=> 'nav navbar-nav',
                'fallback_cb'   	=> 'wp_bootstrap_navwalker::fallback',
                'walker'        	=> new wp_bootstrap_navwalker())
            );
            ?>
        </div><!--end navbar-collapse-->
    </div><!--end container-->
</nav>

<div id="content" class="site-content">
