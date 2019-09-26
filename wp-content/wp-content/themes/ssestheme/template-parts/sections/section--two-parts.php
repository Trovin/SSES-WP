<!-- section__two-part -->
<div class="section__two-part">
    <div class="page-container">

        <div class="small-wrapper small-wrapper__flex-container">
            <div class="left-part">
                <?php $select_value = get_field('section_left_part_content_type'); ?>
                <?php if( $select_value == 'image' ): ?>
                    <img src="<?php the_field('section_two-parts_image'); ?>" class="section_two-parts_image" alt="content-image">

                <?php elseif( $select_value == 'video' ) : ?>
                    <video class="section__video-wrapper" controls="controls" preload="metadata" poster="<?php the_field('section_two-parts_video_poster'); ?>" id="myVideo">
                        <?php
                        $mp4 = get_field('section_two-parts_video_file_mp4');
                        if($mp4) : ?>
                            <source src="<?php echo $mp4; ?>" type="video/mp4" class="video-file">
                        <?php endif; ?>

                        <?php
                        $webm = get_field('section_two-parts_video_file_webm');
                        if($webm) : ?>
                            <source src="<?php echo $webm; ?>" type="video/mp4" class="video-file">
                        <?php endif; ?>
                    </video>

                    <div class="video-description">
                        <?php the_field('section_two-parts_video_description'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="right-part">
                <?php
                $headline = get_field('section_two-parts_рheadline');
                if( $headline ): ?>
                    <div class="two-part__headline"><?php echo $headline; ?></div>
                <?php endif; ?>

                <div class="two-part__info"><?php the_field('section_two-parts_info'); ?></div>

                <?php
                $link = get_field('section_two-parts_button');
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