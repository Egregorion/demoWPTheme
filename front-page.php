<?php 
//Silence is golden 
get_header();
//echo "ceci est ma page custom.php";

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Display post content?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endwhile;
endif;


get_footer();