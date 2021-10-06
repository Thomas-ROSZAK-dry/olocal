<?php

// Ici, on rassemble le code qui sert à mettre en place notre thème :
// - déclarer les menus
// - déclarer les theme support
// - chargement des fichiers de style et de script (CSS / JS)

function setup_theme()
{
    // on déclare que notre thème prend en charge les images de post
    add_theme_support( 'post-thumbnails' );

    register_nav_menus([
        'header-menu' => 'Menu du header'
    ]);
}

add_action('init', 'setup_theme');

function olocal_enqueue_scripts()
{
    // on ajoute un fichier de style dans la queue
    // cette queue viendra alimenter les feuilles de style chargées dans wp_head();
    wp_enqueue_style( 'main-style',  get_template_directory_uri() . '/src/dist/main.css');
    // idem pour les scripts
    wp_enqueue_script( 'main-script',  get_template_directory_uri() . '/src/dist/main.js', [], '1', true);
}

add_action( 'wp_enqueue_scripts', 'olocal_enqueue_scripts' );