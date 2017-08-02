<?php /* Template Name: Strona główna */ ?>


<?php get_header(); ?>


<div class="container-fluid">
	<div class="row">
		<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner carousel-zoom">
				<div class="item active"><img class="img-responsive" src="<?php the_field('baner1'); ?>" style="background-image: no-repeat;" alt="Baner strony głównej">
				    <div class="carousel-caption">
					   <div data-animation="animated zoomInLeft" class="cap-txt "><img class="img-responsive" src="<?php the_field('baner-img'); ?>" alt="Baner strony głównej"></div>
                       <p data-animation="animated bounceInUp"><?php the_field('baner-text'); ?></p>
                        <div class="row">
                                <div class="col-sm-4">
                                   <p data-animation="animated bounceInDown"><span><i class="fa fa-university" aria-hidden="true"></i></span><br><br><?php the_field('baner-text-jst'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                   <p data-animation="animated bounceInDown"><span><i class="fa fa-line-chart" aria-hidden="true"></i></span><br><br><?php the_field('baner-text-biznes'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                   <p data-animation="animated bounceInDown"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span><br><br><?php the_field('baner-text-nauka'); ?></p>
                                </div>
                            </div>
				    </div>
                </div>
                <div class="item"><img class="img-responsive" src="<?php the_field('baner1'); ?>" alt="Baner strony głównej">    
				    <div class="carousel-caption">
					   <div data-animation="animated zoomInLeft" class="cap-txt "><img  class="img-responsive" src="<?php the_field('baner-img2'); ?>" alt="Baner strony głównej"></div>
				    </div>    
				</div>
				
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
			<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
            </div>
        </div> 
	</div>
</div>
<section class="about-me">
    <div class="about-me-title">
        <h1><?php the_field('about-title')?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php the_field('about-img')?>" alt="Zdjęcie Prezesa Zarządu Janusza Jasińskiego">
            </div>
            <div class="col-md-6 about-text">
                <h2><?php the_field('about-header')?></h2>
                <p><?php the_field('about-text')?></p>
                <p class="signature"><?php the_field('about-signature')?></p>
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="blog-header">
            <h1><?php the_field('blog-title')?></h1>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $recent_posts = wp_get_recent_posts( array( 'numberposts' => 3));
            $format = "d M";
            foreach( $recent_posts as $post) : ?>
		    <div class="col-md-4">
                    <div class="card">
                        <?php $miniaturka = get_the_post_thumbnail_url( $post['ID'], 'full' ) ?>
                        <a class="thumbnail" href="<?php echo get_permalink($post['ID']) ?>" style="background-image: url('<?php echo       $miniaturka; ?>')">
                            <div class="post-date"> <?php echo get_the_date ($format, $post['ID']) ?></div>
                        </a>
                        <div class="post-content">
                            <header>
                                <h3 class="post-title"><?php echo $post['post_title'] ?></h3>
                            </header>
                            <p><?php echo wp_trim_words ($post['post_content'], 40, '...'); ?></p>
                            <a href="<?php echo get_permalink($post['ID']) ?>">Czytaj więcej</a>
                        </div>
                    </div>
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="services">
    <div class="services-title">
        <h1><?php the_field('services-title')?></h1>
    </div>
    <div class="container marketing">
      <div class="row">
          <?php
                $args = array( 'post_type' => 'uslugi', 'posts_per_page' => 6 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-4">
                        <i class="service-icon fa <?php the_field( 'icon' ); ?>"></i>
                        <h2 class="service-name"><?php the_field( 'name' ) ?></h2>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
      </div><!-- /.row -->
    </div>
</section>
<section class="members">
    <div class="members-title">
        <h1><?php the_field('members-commune')?></h1>
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
        <h1><?php the_field('members-support')?></h1>
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
        <h1><?php the_field('partners')?></h1>
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
<section class="maps">
    <div class="maps-title">
        <h1><?php the_field('maps')?></h1>
    </div>
    <?php echo do_shortcode('[wpgmza id="1"]')?>
</section>
<section class="contact">
    <div class="contact-title">
        <h1><?php the_field('contact')?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 contact-form">
                <h2>Formularz kontaktowy</h2>
                <?php echo do_shortcode('[contact-form-7 id="253" title="Formularz 1"]')?>
            </div>

             <div class="col-sm-6 contact-data">
                    <img src="<?php the_field( 'contact-details_logo') ?>" alt="Logo firmy">
                    <p class="company-description">
                        <?php the_field( 'contact-details_description') ?>
                    </p>
                    <div class="contact-data-row">
                        <p><?php the_field( 'contact-details_address') ?> </p>
                    </div>
                    <div class="contact-data-row">
                        <p><?php the_field( 'contact-details_phone-number1') ?> </p>
                    </div>
                    <div class="contact-data-row">
                        <p><?php the_field( 'contact-detalis_number') ?> </p>
                    </div>
                   <div class="fb-page" 
                      data-href="https://www.facebook.com/StowarzyszenieAglomeracjaZielonogorska"
                      data-width="380" 
                      data-hide-cover="false"
                      data-show-facepile="false"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>