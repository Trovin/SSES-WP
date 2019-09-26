<?php
/*
 * Template Name: Home template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <section class="section__home-intro">
            <div class="page-container page-container__content">
                <h2 class="home-intro__headline"><?php the_field('home-intro_main_headline'); ?></h2>
                <h1 class="home-intro__sub-headline"><?php the_field('home-intro_sub-headline'); ?></h1>
                <div class="home-intro__info"><?php the_field('home-intro_info'); ?></div>

                <div class="home-wrapper">
                    <?php
                    $link = get_field('home-intro_button');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="page-container page-container__decor-images">
                <!-- decoration images -->
                <?php
                $i = 0;
                if( have_rows('home-intro_decor_items') ):
                    while ( have_rows('home-intro_decor_items') ) : the_row();
                        $i++; ?>
                        <img src="<?php the_sub_field('home-intro_decor_item'); ?>" class="home-intro__decoration home-intro__decoration-<?php echo $i; ?>" alt="decoration-image">
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <img src="<?php the_field('home-intro_large-image'); ?>" class="home-intro__image fit-image" alt="home-intro__image">
        </section>

        <?php echo get_template_part('template-parts/sections/section--blot-images'); ?>

        <section class="section-why">
            <div class="page-container">
                <h2 class="section-why__headline"><?php the_field('section_why_headline'); ?></h2>

                <div class="section-why__wrapper">
                    <?php
                    if( have_rows('section_why_items') ):
                        while ( have_rows('section_why_items') ) : the_row(); ?>
                            <div class="section-why__container">
                                <div class="section-why__item">
                                    <img src="<?php the_sub_field('section_why_item_image'); ?>" class="section-why__item-image" alt="section-why__item-image">
                                    <h2 class="section-why__item-headline"><?php the_sub_field('section_why_item_headline'); ?></h2>
                                    <div class="section-why__item-info"><?php the_sub_field('section_why_item_info'); ?></div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

                <?php
                $link = get_field('section_why_button');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn btn_green" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </section>

        <?php echo get_template_part('template-parts/sections/section-info'); ?>

        <?php echo get_template_part('template-parts/sections/section-quote'); ?>

        <?php echo get_template_part('template-parts/sections/section--two-parts'); ?>

        <?php echo get_template_part('template-parts/sections/section-interess'); ?>

	</main>

<?php get_footer(); ?>
