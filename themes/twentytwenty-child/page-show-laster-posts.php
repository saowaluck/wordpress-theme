<?php

    get_header();
    main();
    get_footer();


function render_post($posts) {
    foreach($posts as $post){
        echo '<ul>';
            echo '<li>Tittle: ' . $post['post_title'] . '</li>';
            echo '<li>Date: ' . $post['post_date'] . '</li>';
            echo '<li>Content: ' . $post['post_content'] . '</li>';
            echo '<li>Feature Image : ' . get_the_post_thumbnail_url() . '</li>';

            $categories = get_the_category();
            foreach( $categories as $category){
                echo '<li>Category: ' .  $category->name . '</li>';
            }

         echo '</ul>';
    }

}

function main() {
    $args = array(
        'numberposts' => 10,
        'orderby'     => 'post_date',
        'order'       => 'DESC',
        'post_type'   => 'post'
    );

    $posts = wp_get_recent_posts( $args );
    render_post($posts);
}

