<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package urology
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Przepraszamy, podana strona nie istnieje.', 'urology' ); ?></h1>
				</header><!-- .page-header -->
				<div class="container">
				<div class="row">
				<div class="page-content">
					<p><?php esc_html_e( 'Nic nie zostało znalezione w podanej lokalizacji. Proszę spróbować przejść do strony głównej serwisu', 'urology' ); ?></p>

					<?php
						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( urology_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'urology' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

					?>
				
				</div><!-- .page-content -->
			

		

<?php get_sidebar(); ?>
</div>
</div>
</main><!-- #main -->
	</div><!-- #primary -->
</section><!-- .error-404 -->
<? get_footer(); ?>
