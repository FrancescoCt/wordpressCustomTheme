<?php
#region BasicSetup

//Basic setup function to make the custom-theme work
function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'customtheme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

function my_custom_image_sizes() {
    add_image_size('custom_size', 600, 400, true); // 600px di larghezza e 400px di altezza, ritagliato proporzionalmente
}
add_action('after_setup_theme', 'my_custom_image_sizes');
#endregion BasicSetup
#region Scripts
//Function to add scripts js to the site
function custom_theme_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('custom-theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
#region Attributo module
// Ad attribute module to scripts.js
function add_type_attribute($tag, $handle, $src) {
    if ('custom-theme-scripts' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

#endregion Attributo module a scripts
#endregion Scripts
#region Collections
//Recall custom arrays and costants located in assets repository, names are not strict
require_once get_template_directory() . '/assets/collections/arrays.php';
require_once get_template_directory() . '/assets/collections/queries.php';
#endregion Collections
#region Components
//Functions that recall custom components located in assets repository, names are not strict
//Make sure that every component has its reference associated here
require_once get_template_directory() . '/assets/components/accordionArticles.php';
require_once get_template_directory() . '/assets/components/cards.php';
require_once get_template_directory() . '/assets/components/cardsAdvanced.php';
require_once get_template_directory() . '/assets/components/carousel.php';
require_once get_template_directory() . '/assets/components/contactsForm.php';
require_once get_template_directory() . '/assets/components/mainSections.php';
require_once get_template_directory() . '/assets/components/navbarLinks.php';
require_once get_template_directory() . '/assets/components/randomImage.php';

// To recall the component, go to the respective function name in component file, for example
// if you want to recall the cards component write: my_custom_cards($CARDS_ARRAY).
// Make sure that the array has the same structure of the array in collections/arrays.php

#endregion Components
#region DatabaseTables
require_once get_template_directory() . '/assets/databaseTables/feedbackTable.php';

// handle_contacts_form();
#endregion DatabaseTables
?>
