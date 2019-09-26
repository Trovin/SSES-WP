<?php
/*
 * Template Name: Contact template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>

        <div class="page-container page-container_contact">
            <div class="contact-flex__item">
                <div class="contact__form-wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="283" title="Contact form"]'); ?>
                </div>
            </div>

            <div class="contact-flex__item">
                <div class="contact-flex__item-inner">
                    <div class="contact-flex__headline">
                        <?php the_field('contact_headline'); ?>
                    </div>
                </div>

                <div class="contact-flex__item-inner">
                    <div class="contact-flex__number">
                        <span class="item-info">Tel: </span>
                        <?php the_field('contact_phone_number'); ?>
                    </div>
                </div>

                <div class="contact-flex__item-inner">
                    <div class="contact-flex__email">
                        <span class="item-info">Email: </span>
                        <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
                    </div>
                </div>

                <div class="contact-flex__item-inner">
                    <span class="item-info">Address: </span>
                    <div class="contact-flex__adress"><?php the_field('contact_adress'); ?></div>
                </div>

                <div class="contact-flex__item-inner">
                    <span class="item-info">Directions: </span>
                    <div class="contact-flex__direction"><?php the_field('contact_directions'); ?></div>
                </div>
            </div>
        </div>

        <?php echo get_template_part('template-parts/sections/section--blot-images'); ?>

        <div class="contact-map">
            <?php echo do_shortcode('[google_map_easy id="1"]'); ?>
        </div>

	</main>

<?php get_footer('pages'); ?>
