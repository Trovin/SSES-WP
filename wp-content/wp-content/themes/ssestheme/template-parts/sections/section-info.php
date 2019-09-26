<!-- section-info -->
<div class="section-info">
    <div class="page-container">
        <div class="section-info__wrapper" style="background-image: url(<?php the_field('section_info_image'); ?>)">
            <div class="section-info__content">
                <div class="section-info__headline"><?php the_field('section_info_headline'); ?></div>
                <div class="section-info__text">
                    <?php the_field('section_info_text'); ?>
                </div>

                <?php
                $link = get_field('section_info_button');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>