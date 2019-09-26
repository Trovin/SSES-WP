<?php
/*
 * Template Name: Terms template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>

        <section class="section-terms">
            <div class="page-container">
                <?php
                if( have_rows('section-terms_info') ):
                    while ( have_rows('section-terms_info') ) : the_row(); ?>
                        <div class="section-terms__item">
                            <div class="section-terms__headline"><?php the_sub_field('section-terms_info_item_headline'); ?></div>
                            <div class="section-terms__info"><?php the_sub_field('section-terms_info_item_info'); ?></div>
                        </div>
                    <?php endwhile;
                endif; ?>

            </div>
        </section>

	</main>

<?php get_footer('pages'); ?>
