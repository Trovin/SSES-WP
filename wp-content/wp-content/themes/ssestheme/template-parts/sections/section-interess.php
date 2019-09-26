<!-- section-interess -->
<section class="section-interess">
    <div class="page-container page-container__interess">
        <div class="section-interess__headline"><?php the_field('section_interess_headline'); ?></div>
        <div class="section-interess__info"><?php the_field('section_interess_info'); ?></div>

        <?php
        $link = get_field('section_interess_button');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
            <a class="btn btn_green" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

        <div class="section_interess__items-wrapper">
            <?php
            if( have_rows('section_interess_items') ):
                while ( have_rows('section_interess_items') ) : the_row(); ?>
                    <img src="<?php the_sub_field('section_interess_image'); ?>" class="section-interess__item-image" alt="section_interess__image">
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>