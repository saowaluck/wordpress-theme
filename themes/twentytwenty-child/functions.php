<?php

function my_theme_enqueue_style(){
    $src = get_template_directory_uri() . '/style.css';
    wp_enqueue_style( 'parent-style', $src);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');
wp_register_style( 'Bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
wp_enqueue_style( 'Bootstrap4' );


# It create `Team Members` post type in the admin
# see more detail in https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
# has_archieve for include team member post type to show in archive page and re save permalink

// function team_member_custom_post_type() {
//     $post_type = 'team-members';
//     $args = array(
//         'labels'      => array(
//             'name'          =>'Team Members',
//             'singular_name' => 'Team Member',
//         ),
//         'public'      => true,
//         'has_archive' => true
//     );
//     register_post_type( $post_type, $args);
// }

// add_action('init', 'team_member_custom_post_type');