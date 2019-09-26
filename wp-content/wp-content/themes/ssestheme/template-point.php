<?php
/*
 * Template Name: End point template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>
        
        <section class="section__end-point">
            <div class="page-container">

                <div class="end-point__wrapper">
                    <div class="end-point__image-wrapper">
                        <img src="<?php the_field('section_end-point_image'); ?>" class="end-point__image" alt="end-point__image">
                    </div>
                    
                    <div class="end-point__content-wrapper">
                        <div class="end-point__content-headline"><?php the_field('section_end-point_headline'); ?></div>
                        <div class="end-point__content-info"><?php the_field('section_end-point_info'); ?></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-apprenticeship">
            <div class="section-steps">
                <div class="step-item">1</div>
                <div class="step-item">2</div>
                <div class="step-item">3</div>
            </div>

            <div class="page-container page-container_steps">
                <h2 class="section-steps__headline"><?php the_field('section_steps_headline'); ?></h2>

                <div class="section-steps__flex">
                    <?php
                    if( have_rows('section_steps_items') ):
                        while ( have_rows('section_steps_items') ) : the_row(); ?>
                            <div class="section-steps__item" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <div class="section-steps__item-text section-steps__item-label"><?php the_sub_field('section_steps_item_label'); ?></div>
                                <div><img src="<?php the_sub_field('section_steps_items_image'); ?>" class="section-steps__item-image" alt="steps-image"></div>
                                <div class="section-steps__item-text section-steps__item-date"><?php the_sub_field('section_steps_item_date'); ?></div>
                                <div class="section-steps__item-info"><?php the_sub_field('section_steps_item_info'); ?></div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>

        <section class="section__point-interess">
            <div class="page-container">
                <h2 class="section__point-interess-headline"><?php the_field('section_interess_images_headline'); ?></h2>
                <div class="section__point-interess-info"><?php the_field('section_interess_images_info'); ?></div>

                <?php
                $link = get_field('section_interess_images_button');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <a class="btn btn_green" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>

                <div class="section__point-interess-flex">
                    <?php
                    if( have_rows('section_interess_images_items') ):
                        while ( have_rows('section_interess_images_items') ) : the_row(); ?>
                            <div class="section__point-interess-item">
                                <div><img src="<?php echo get_template_directory_uri().'/dist/icons/check-icon.svg'?>" class="section-interess__icon style-svg" alt="interess-image"></div>
                                <div><?php the_sub_field('section_interess_images_description'); ?></div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>

        <!-- section__two-part -->
        <div class="section__two-part">
            <div class="page-container">
                <h2 class="two-part__main-headline"><?php the_field('section_point_two-parts_headline'); ?></h2>

                <div class="small-wrapper small-wrapper__flex-container">
                    <div class="left-part">
                        <img src="<?php the_field('section_point_two-parts_image'); ?>" class="section_two-parts_image" alt="content-image">
                    </div>

                    <div class="right-part">
                        <?php
                        $headline = get_field('section_two-parts_рheadline');
                        if( $headline ): ?>
                            <div class="two-part__headline"><?php echo $headline; ?></div>
                        <?php endif; ?>

                        <div class="two-part__info"><?php the_field('section_point_two-parts_info'); ?></div>

                        <div class="two-part__info-flex">
                            <?php
                            $link = get_field('section_point_two-parts_button');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>

                            <a class="btn btn_white" id="modal-btn" href="#"><?php the_field('section_point_two-parts_button_2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo get_template_part('template-parts/sections/section-quote'); ?>

        <div class="modal" id="modal">
            <div class="modal-inner">
                <div class="modal-inner__close" id="modal-inner__close">
                    <img src="<?php echo get_template_directory_uri().'/dist/icons/close-icon.svg'?>" class="modal__close-icon" alt="close-icon">
                </div>

                <h2 class="modal-inner__main-headline"><?php the_field('modal_section_main_headline'); ?></h2>

                <div class="modal-content">
                    <div class="modal-content__item">
                        <h2 class="modal-content__item-headline"><?php the_field('modal_table_1_headline'); ?></h2>

                        <div class="table-wrapper">
                        <?php
                        $table = get_field( 'modal_table_1' );
                        if ( ! empty ( $table ) ) {
                        echo '<table border="0">';
                            if ( ! empty( $table['caption'] ) ) {
                            echo '<caption>' . $table['caption'] . '</caption>';
                            }
                            if ( ! empty( $table['header'] ) ) {
                            echo '<thead>';
                            echo '<tr>';
                                foreach ( $table['header'] as $th ) {
                                echo '<th>';
                                    echo $th['c'];
                                    echo '</th>';
                                }
                                echo '</tr>';
                            echo '</thead>';
                            }

                            echo '<tbody>';
                            foreach ( $table['body'] as $tr ) {
                            echo '<tr>';
                                foreach ( $tr as $td ) {
                                echo '<td>';
                                    echo $td['c'];
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        } ?>
                        </div>
                    </div>

                    <div class="modal-content__item">
                        <h2 class="modal-content__item-headline"><?php the_field('modal_table_2_headline'); ?></h2>

                        <div class="table-wrapper">
                        <?php
                        $table = get_field( 'modal_table_2' );
                        if ( ! empty ( $table ) ) {
                            echo '<table border="0">';
                            if ( ! empty( $table['caption'] ) ) {
                                echo '<caption>' . $table['caption'] . '</caption>';
                            }
                            if ( ! empty( $table['header'] ) ) {
                                echo '<thead>';
                                echo '<tr>';
                                foreach ( $table['header'] as $th ) {
                                    echo '<th>';
                                    echo $th['c'];
                                    echo '</th>';
                                }
                                echo '</tr>';
                                echo '</thead>';
                            }

                            echo '<tbody>';
                            foreach ( $table['body'] as $tr ) {
                                echo '<tr>';
                                foreach ( $tr as $td ) {
                                    echo '<td>';
                                    echo $td['c'];
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        } ?>
                        </div>
                    </div>

                    <div class="modal-content__item">
                        <h2 class="modal-content__item-headline"><?php the_field('modal_table_3_headline'); ?></h2>

                        <div class="table-wrapper">
                        <?php
                        $table = get_field( 'modal_table_3' );
                        if ( ! empty ( $table ) ) {
                            echo '<table border="0">';
                            if ( ! empty( $table['caption'] ) ) {
                                echo '<caption>' . $table['caption'] . '</caption>';
                            }
                            if ( ! empty( $table['header'] ) ) {
                                echo '<thead>';
                                echo '<tr>';
                                foreach ( $table['header'] as $th ) {
                                    echo '<th>';
                                    echo $th['c'];
                                    echo '</th>';
                                }
                                echo '</tr>';
                                echo '</thead>';
                            }

                            echo '<tbody>';
                            foreach ( $table['body'] as $tr ) {
                                echo '<tr>';
                                foreach ( $tr as $td ) {
                                    echo '<td>';
                                    echo $td['c'];
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        } ?>
                        </div>
                    </div>

                    <div class="modal-content__item">
                        <div class="modal-content__headline"><?php the_field('modal_section_headline'); ?></div>
                        <div class="modal-content__item-description"><?php the_field('modal_section_info'); ?></div>
                    </div>
                </div>
            </div>
            <?php ?>
        </div>
	</main>

<?php get_footer('pages'); ?>
