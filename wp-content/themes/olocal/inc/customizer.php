<?php

function osailing_customize_register( $wp_customize ) {

    // on ajoute un panneau
    $wp_customize->add_panel(
        'olocal_theme', // l'id du pannel (au choix)
        [
            'title' => 'Personnalisation du thème olocal' // Texte affiché dans le customizer
        ]
    );

    // on ajoute une section
    $wp_customize->add_section(
        'olocal_front_page', // l'id de la section (au choix)
        [
            'title' => 'Page d\'accueil', // Texte affiché dans le customizer
            'panel' => 'olocal_theme' // l'id du pannel défini plus haut
        ]
    );

    // on ajoute un setting => une valeur qui peut être modifiée
    $wp_customize->add_setting(
        'olocal_front_page_text' // l'id du setting, un peu comme le nom d'une variable
    );

    // on ajoute un control => permettre de modifier cette valeur
    $wp_customize->add_control(
        'olocal_front_page_text', // reprendre l'id du setting choisi plus haut
        [
            'type' => 'textarea', // le type de contrôle à afficher (~ le type de champ)
            'label' => 'Texte de la page d\'accueil', // le label associé au champ
            'section' => 'olocal_front_page' // id de la section choisi plus haut
        ]
    );

}

 add_action( 'customize_register', 'olocal_customize_register' );