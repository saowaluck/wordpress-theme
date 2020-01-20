<?php
    # archive team-members
    # for override custom post-type team members page

    #var_dumps($wp_query) for show all query
    #var_dump($posts) show all post;

    get_header();

    echo '<div class="container mt-5">';
    echo '<div class="row">';

    if ( have_posts() ){
        while( have_posts(  )){
            the_post();
                echo '<div class="col-xl-3 col-md-6 mb-4">';
                    echo '<div class="card border-0 shadow">';
                        echo '<img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">';
                        echo '<div class="card-body text-center">';
                            echo '<a href="' . get_the_permalink() .'"';
                                echo '<h5 class="card-title mb-0">' . get_the_title() . '</h5>';
                            echo '</a>';
                            echo '<div class="card-text text-black-50">Web Developer</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
        }
    }

    echo '</div>';
    echo '</div>';

    get_footer();