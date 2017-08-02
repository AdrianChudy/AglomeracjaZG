<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package urology
 */

get_header(); ?>

<div id="primary" class="content-area">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<main id="main" class="site-main" role="main">
            <div class="container">
			     <div class="row">
				
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-single-post', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						
						

					endwhile; // End of the loop.
					?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
