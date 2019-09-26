        </div>
        <!--close content class tag-->
        <footer class="footer" role="contentinfo">
            <div class="pre-footer">
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
