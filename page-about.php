<?php
/**
 * Template Name: About
**/
get_header(); ?>
<section class="project-page">
    <div class="page-header" style="background-image: url('<?php the_field('page-header-img')?>')">
		<h1>O NAS</h1>
        <img src="<?php the_field('page-header-mapa')?>" alt="Mapa AZ">
    </div>
    <div class="container">
        <div class="row">
		<div class="col-sm-8">
		       <?php
	               while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>
    
                <?php endwhile;?>
         
		</div>
		<div class="col-sm-4">
            <h2>Dokumenty do pobrania</h2>
            <div class="center">
                <h3>Folder promocyjny</h3>
                <a href="<?php the_field('folder_link')?>" target="_blank">
    <img src="<?php the_field('folder_promocyjny')?>" alt="Obraz folderu promocyjnego AZ"></a>
                <h3>Statut Stowarzyszenia</h3>
                <a href="<?php the_field('statut_link')?>" target="_blank">
    <img src="<?php the_field('statut')?>" alt="Obraz statutu AZ">
    </a>
                <h3>Wzór uchwały w sprawie przystąpienia do AZ</h3>
                <a href="<?php the_field('uchwala_link')?>" target="_blank">
    <img src="<?php the_field('uchwala')?>" alt="Obraz uchwały AZ"></a>
            </div>
        </div>
		</div>
    </div>
</section>
<section class="members">
    <div class="members-title">
        <h1>Członkowie Zwykli</h1>
    </div>
    <div class="container">
      <div class="row">
          <?php
                $args = array( 'post_type' => 'czlonkowie', 'posts_per_page' => 30 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a href="<?php the_field('strona'); ?>" target="_blank"><div class="col-xs-2">
                        <img class="img-responsive" src="<?php the_field('herb'); ?>" alt="Herb Gminy">
                        <h3 class="commune-name"><?php the_field( 'commune-name' ) ?></h3>
                        </div></a>
                <?php endwhile; wp_reset_postdata(); ?>
      </div><!-- /.row -->
    </div>
</section>
<section class="members support">
    <div class="support-members-title">
        <h1>Członkowie Wspierający</h1>
    </div>
    <div class="container">
      <div class="row">
          <?php
                $args = array( 'post_type' => 'czlonkowie_support', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a href="<?php the_field('support'); ?>" target="_blank"><div class="col-xs-3">
                        <img class="img-responsive" src="<?php the_field('logo-wspierajacy'); ?>" alt="Logo organizacji">
                        <h3 class="commune-name"><?php the_field( 'organization-name' ) ?></h3>
                        </div></a>
                <?php endwhile; wp_reset_postdata(); ?>
      </div><!-- /.row -->
    </div>
</section>
<section class="members partners">
    <div class="partners-title">
        <h1>Partnerzy</h1>
    </div>
    <div class="container">
      <div class="row">
          <?php
                $args = array( 'post_type' => 'partners', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a href="<?php the_field('strona-partners'); ?>" target="_blank"><div class="col-xs-3">
                        <img class="img-responsive" src="<?php the_field('logo-partners'); ?>" alt="Logo organizacji">
                        <h3 class="commune-name"><?php the_field( 'partners-name' ) ?></h3>
                        </div></a>
                <?php endwhile; wp_reset_postdata(); ?>
      </div><!-- /.row -->
    </div>
</section>
<?php get_footer();