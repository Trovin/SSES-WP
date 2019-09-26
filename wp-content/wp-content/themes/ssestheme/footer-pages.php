        </div>
        <!--close content class tag-->
        <footer class="footer" role="contentinfo">
            <div class="section_interess__items-wrapper">
                <?php
                if( have_rows('pages_footer_images', 'options') ):
                    while ( have_rows('pages_footer_images', 'options') ) : the_row(); ?>
                        <img src="<?php the_sub_field('pages_footer_image', 'options'); ?>" class="section-interess__item-image" alt="section_interess__image">
                    <?php endwhile;
                endif; ?>
            </div>

            <div class="pre-footer pre-footer_small">
                <div class="page-container">
                    <div class="check-block">
                        <img src="<?php the_field('footer_section_check_image', 'options'); ?>" alt="check-image">
                    </div>

                    <div class="footer__id-number"><?php the_field('footer_section_id_number', 'options'); ?></div>

                    <nav class="footer-nav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'footer-nav__list footer-nav__list-main', 'container' => false ) ); ?>
                    </nav>
                </div>
            </div>

            <div class="footer-section">
                <nav class="footer-nav footer-nav__additional" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-3', 'menu_class' => 'footer-nav__list footer-nav__list-additional', 'container' => false ) ); ?>
                </nav>

                <div class="footer-copyright"><?php the_field('footer_section_copyrightt_info', 'options'); ?></div>
            </div>
        </footer>

    </div>
    <!--close wrapper class tag-->
<?php wp_footer(); ?>

</body>
</html>
