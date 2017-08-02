<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package urology
 */

get_header(); ?>

	<div class="page-header" style="background-image: url('<?php the_field('page-header-img')?>')">
		<h1>AKTUALNOŚCI</h1>
        <img src="<?php the_field('page-header-mapa')?>" alt="Mapa AZ">
    </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="row">
		<div class="col-sm-8">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
				
			endwhile;
				the_posts_navigation();
		
			else :
			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
		<div class="col-sm-4 sidebar">
			<?php get_sidebar(); ?>
		</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();