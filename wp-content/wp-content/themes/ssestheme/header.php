<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
    <div class="wrapper" id="app">
        <div class="content">
            <header class="header">
                <div class="page-container page-container_header-flex">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php the_field('logo_image', 'options'); ?>" class="main-logo style-svg" alt="main-logo-image">
                    </a>

                    <nav class="main-nav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
                    </nav>

                    <div class="menu-action">
                        <span class="menu-action__item"></span>
                        <span class="menu-action__item"></span>
                        <span class="menu-action__item"></span>
                    </div>
                </div>
            </header>
