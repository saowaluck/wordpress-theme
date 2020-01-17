<?php

get_header();

echo '<h2>single page</h2>';
if (have_posts()) :
    while (have_posts()) : the_post();
        echo '<div class="card">';
            echo '<img class="card-img-top" src="' . get_the_post_thumbnail_url() .'"alt="Card image cap">';
            echo '<div class="card-body">';
                echo '<h5 class="card-title">'. the_title() .'</h5>';
                echo '<p class="card-text">' . the_content() . '</p>';
            echo '</div>';
        echo '</div>';
    endwhile;
endif;
get_footer();