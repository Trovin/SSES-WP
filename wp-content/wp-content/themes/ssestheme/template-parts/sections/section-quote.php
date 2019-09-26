<!-- section-quote -->
<div class="section-quote">
    <div class="section-quote__decoration-block"></div>

    <div class="page-container">
        <div class="section-quote__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/quote-icon.png" class="quote-icon" alt="quote-icon">

            <blockquote class="blockquote"><?php the_field('section_quote_info'); ?></blockquote>
            <div class="blockquote-author"><?php the_field('section_quote_author'); ?></div>
        </div>
    </div>
</div>