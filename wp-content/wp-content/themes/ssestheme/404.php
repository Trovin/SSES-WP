<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

		<section class="error-404 not-found">
            <div class="page-container">
                <header class="page-header">
                    <h2 class="page-title">
                        <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?>
                    </h2>
                    <br>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home404__link" rel="home">
                        Return to home page
                    </a>
                </header>
            </div>
		</section>

	</main>

<?php get_footer(); ?>
