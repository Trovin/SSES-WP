<!-- section__page-intro -->
<section class="section__page-intro">
    <div class="section__page-intro-wrapper">
        <img src="<?php echo get_template_directory_uri().'/src/assets/images/section-hero--page-image.jpg'?>" class="section__page-intro-image" alt="section__page-intro-image">
    </div>

    <div class="page-container">
        <h1 class="section__page-intro-headline"><?php the_field('page-intro_headline'); ?></h1>
        <div class="section__page-intro-info"><?php the_field('page-intro_info'); ?></div>

        <?php
        $flag = get_field('page-intro_need_button');
        $link = get_field('page-intro_button');
        if( $link && $flag ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn btn_transparent" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
    </div>
</section>