

<!-- Carregando folha de estilo -->
<?php

function load_scripts(){
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// REGISTRANDO OS MENUS

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu'
    )
    );