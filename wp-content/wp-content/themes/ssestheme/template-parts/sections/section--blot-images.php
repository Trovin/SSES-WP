<!-- section__blot-images -->
<div class="section__blot-images">
    <div class="page-container">

        <h2 class="blot-images__headline"><?php the_field('blot-images_headline'); ?></h2>

        <div class="blot-images__flex-wrapper">
            <?php
            if( have_rows('blot-images_items') ):
                while ( have_rows('blot-images_items') ) : the_row(); ?>
                    <div class="blot-images__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/accept-image-icon.svg" class="blot__accept-image style-svg" alt="accept-image">
                        <div class="blot-images_item_info"><?php the_sub_field('blot-images_item_info'); ?></div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>

        <?php
        $link = get_field('blot-images_section_button');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self'; ?>
            <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
    </div>
</div>