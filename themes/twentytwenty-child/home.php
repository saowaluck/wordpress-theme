<?php

get_header();

echo 'Post page';

$args = array(
    'post_type'   => 'post',
    'numberposts' => 5,
    'order_by'    => 'data',
    'order'       => 'DESC'
);

$latest_posts = get_posts( $args );

echo '<div class="container">';
echo '<div class="row">';

foreach ( $latest_posts as $latest_post ) {
    $categories = get_the_category( $latest_post->ID );
    echo '<div class="col-md-6">';
        foreach ($categories as $category) {
            echo $category->name;
        }
        echo '<p><a href="'. get_permalink( $latest_post->ID ) .'">See Details</a></p>';
        echo '<h4>' . $latest_post->post_title . '</h4>';
        echo '<p>' . $latest_post->post_date . '</p>';
        echo '<img src="'. get_the_post_thumbnail_url( $latest_post->ID ). '">' ;

    echo '</div>';
}
echo '</div>';
echo '</div>';


get_footer();