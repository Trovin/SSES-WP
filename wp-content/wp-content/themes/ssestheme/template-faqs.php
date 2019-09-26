<?php
/*
 * Template Name: FAQs template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>

        <section class="section-faqs">
        	<div class="page-container_faqs">
        		<?php
				if( have_rows('faqs_section') ):
					$i = 0;
					while ( have_rows('faqs_section') ) : the_row();
					$i++; ?>
                        <?php if($i == 1) : ?>
                            <div class="faqs-section__item">
                                <div class="faqs-section__headline">
                                    <?php the_sub_field('faqs_section_headline'); ?>
                                    <img src="<?php echo get_template_directory_uri().'/dist/icons/shape-icon.png'; ?>" style="transform: rotate(0);" class="faqs-section__icon faqs-section__icon-active" alt="shape-icon" />
                                </div>
                                <div class="faqs-section__description" style="display: block;"><?php the_sub_field('faqs_section_description'); ?></div>
                            </div>

                        <?php else : ?>
                            <div class="faqs-section__item">
                                <div class="faqs-section__headline">
                                    <?php the_sub_field('faqs_section_headline'); ?>
                                    <img src="<?php echo get_template_directory_uri().'/dist/icons/shape-icon.png'; ?>" class="faqs-section__icon" alt="shape-icon" />
                                </div>
                                <div class="faqs-section__description" ><?php the_sub_field('faqs_section_description'); ?></div>
                            </div>
                            <?php endif; ?>
					<?php endwhile;
				endif; ?>
        	</div>
        </section>

        <?php echo get_template_part('template-parts/sections/section-interess'); ?>

	</main>

<?php get_footer('pages'); ?>
