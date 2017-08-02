<?php
/**
 * Template Name: Projekty
**/
get_header(); ?>
<section class="project-page">
    <div class="page-header" style="background-image: url('<?php the_field('page-header-img')?>')">
		<h1>PROJEKTY</h1>
        <img src="<?php the_field('page-header-mapa')?>" alt="Mapa AZ">
    </div>
    <div class="container">
        <?php $args = array( 'post_type' => 'uslugi', 'posts_per_page' => 12 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="row">
            <div class="col-sm-4">
                <i class="service-icon fa <?php the_field( 'icon' ); ?>"></i>
            </div>
            <div class="col-sm-8">
                <h3 class="service-name text-uppercase"><?php the_field( 'name' ); ?> </h3>
                <p><?php the_content('<span class="more-link">' . __('Czytaj więcej', 'themezee_lang') . '</span>') ?></p>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>