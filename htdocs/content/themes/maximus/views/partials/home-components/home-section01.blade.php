MAIN / HOME

<?php // If used with Gutenberg
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif; ?>
