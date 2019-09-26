<?php
/*
 * Template Name: Login template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

        <?php echo get_template_part('template-parts/sections/section--page-intro'); ?>

        <div class="form-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="12" title="Login form"]'); ?>
        </div>

	</main>

<?php get_footer('pages'); ?>
