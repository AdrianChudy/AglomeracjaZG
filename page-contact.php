<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<section class="contact-page">
    <div class="page-header" style="background-image: url('<?php the_field('page-header-img')?>')">
		<h1>KONTAKT</h1>
        <img src="<?php the_field('page-header-mapa')?>" alt="Mapa AZ">
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
    <div class="maps-title">
    <?php echo do_shortcode('[wpgmza id="1"]')?>
    </div>
</section>
<?php get_footer(); ?>