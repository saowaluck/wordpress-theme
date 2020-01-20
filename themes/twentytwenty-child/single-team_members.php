<?php

    # var_dump($post); it show post
    get_header();

    echo '<div class="container mt-5 mb-5">';
    echo '<div class="row d-flex justify-content-center">';

    if ( have_posts() ){
        while( have_posts(  )){
            the_post();
                echo '<div class="col-md-6">';
                    echo '<div class="card border-0 shadow">';
                        echo '<img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">';
                        echo '<div class="card-body text-center">';
                            echo '<a href="' . get_the_permalink() .'"';
                                echo '<h5 class="card-title mb-0">' . get_the_title() . '</h5>';
                            echo '</a>';
                            // get custom field by wordpress syntax
                            // echo '<div class="card-text text-black-50">'.get_post_meta( $post->ID, 'job_title', true) . '</div>';
                            // get custom field by ACF plugins syntax
                            echo '<div class="card-text text-black-50">'. get_field('job_title') . '</div>';
                            echo '</div>';
                    echo '</div>';
                echo '</div>';
        }
    }

    echo '</div>';
    echo '</div>';

    get_footer();