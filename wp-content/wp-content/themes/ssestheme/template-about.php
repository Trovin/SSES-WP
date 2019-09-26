<?php
/*
 * Template Name: About template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>

        <?php echo get_template_part('template-parts/sections/section--two-parts'); ?>

        <section class="section-values">
            <div class="page-container">
                <img src="<?php echo get_template_directory_uri().'/src/assets/images/person-image.svg'?>" class="values__person-image style-svg" alt="values__person-image">

                <img src="<?php echo get_template_directory_uri().'/src/assets/images/descor-cloud-1.png'?>" class="values__decor-cloud1" alt="values__decor-cloud">
                <img src="<?php echo get_template_directory_uri().'/src/assets/images/descor-cloud-2.png'?>" class="values__decor-cloud2" alt="values__decor-cloud">

                <div class="values-items__headline"><?php the_field('section_values_headline'); ?></div>

                <div class="values-items">
                    <?php
                    if( have_rows('section_values_items') ):
                        while ( have_rows('section_values_items') ) : the_row(); ?>
                            <div class="value-item__wrapper">
                                <div class="value-item">
                                    <img src="<?php echo get_template_directory_uri().'/dist/icons/values-icon.svg'?>" class="value-item__icon style-svg" alt="value-item--icon">
                                    <div class="value-item__headline"><?php the_sub_field('section_values_item_headline'); ?></div>
                                    <div class="value-item__info"><?php the_sub_field('section_values_item_info'); ?></div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>

                    <img src="<?php echo get_template_directory_uri().'/dist/icons/descor-leaves-left.png'?>" class="values__decor-leaves1" alt="values__decor-leaves">
                    <img src="<?php echo get_template_directory_uri().'/dist/icons/descor-leaves-right.png'?>" class="values__decor-leaves2" alt="values__decor-leaves">
                </div>
            </div>
        </section>

        <?php echo get_template_part('template-parts/sections/section-info'); ?>

        <div class="section--big-text">
            <div class="page-container page-container__flex-item">
                <img src="<?php the_field('big-text_image'); ?>" class="big-text__image fit-image" alt="big-text__image">

                <div class="big-text__content">
                    <div class="big-text__info"><?php the_field('big-text_info'); ?></div>

                    <?php
                    $link = get_field('big-text_button');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php echo get_template_part('template-parts/sections/section--blot-images'); ?>

        <?php echo get_template_part('template-parts/sections/section-interess'); ?>
	</main>

<?php get_footer(); ?>
