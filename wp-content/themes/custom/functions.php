<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function custom_register_styles()
{
    wp_enqueue_style("custom-style", get_template_directory_uri() . "/assets/css/style.css", [], 1.0, 'all');
}

function custom_menus()
{
    $locations = [
        "primary" => "Desktop primary sidebar menu"
    ];

    register_nav_menus($locations);
}

add_action("init", "custom_menus");
add_action("wp_enqueue_scripts", "custom_register_styles");


// function followandrew_add_support()
// {
//     add_theme_support("title-tag");
//     add_theme_support("custom-logo");
//     add_theme_support('post-thumbnails');
// }

// function followandrew_menus()
// {
//     $locations = [
//         "primary" => "Desktop primary sidebar menu",
//         "footer" => "Footer menu"
//     ];

//     register_nav_menus($locations);
// }

// function followandrew_sidebar()
// {

//     register_sidebar([
//         "before_title" => "",
//         "after_title" => "",
//         "before_widget" => "",
//         "after_widget" => "",
//         "name" => "Sidebar Area",
//         "id" => "sidebar-1",
//         "description" => "Sidebar widget area"
//     ]);

//     register_sidebar([
//         "before_title" => "",
//         "after_title" => "",
//         "before_widget" => "",
//         "after_widget" => "",
//         "name" => "Footer Area",
//         "id" => "footer-1",
//         "description" => "Footer widget area"
//     ]);
// }


// function followandrew_register_scripts()
// {
//     wp_enqueue_script("followandrew-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", ["followandrew-jquery", "followandrew-popper"], "4.4.1", true);
//     wp_enqueue_script("followandrew-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", [], "3.4.1", true);
//     wp_enqueue_script("followandrew-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", [], "1.16", true);
//     wp_enqueue_script("followandrew-js", get_template_directory_uri() . "/assets/js/main.js", [], "1.0", true);
// }

// add_action("wp_enqueue_scripts", "followandrew_register_scripts");

// add_action("after_setup_theme", "followandrew_add_support");

// add_action("init", "followandrew_menus");

// add_action("widgets_init", "followandrew_sidebar");
