<?php

// Définition des template tags custom :
// Toutes les fonctions qui permettent d'afficher des choses au sein des templates

function the_homepage_excerpts()
{
    $displayed_post_ids = [];
    // pour chaque catégorie dans la constante FRONTPAGE_CATEGORY_LIST
    foreach (FRONTPAGE_CATEGORY_LIST as $category_id) :
        // récupérer le dernier article
        $category_query = new WP_Query([
            // les posts de la catégorie courante ($category_id)
            'cat' => $category_id,
            // les posts qui ne sont pas dans la liste $displayed_post_ids
            'post__not_in' => $displayed_post_ids,
            // les posts publiés (pas les brouillons),
            'post_status' => 'publish',
            // tri par date décroissante
            'orderby' => 'date',
            'order' => 'DESC',
            // un seul post
            'posts_per_page' => 1
        ]);

        if ($category_query->have_posts()) :
            $category_query->the_post();

            // si besoin de vérifier que la Query a bien fonctionné :
            // var_dump($category_query->post);
            // on précise que ce post a déjà été utilisé
            $displayed_post_ids[] = get_the_ID();
            
            // charger le template part "home_excerpt"
            get_template_part('template-parts/home_excerpt');
            
        endif;
    endforeach;

    // plus haut, on a utilisé la méthode "the_post()" qui a modifié la boucle principale (en fait, qui a modifié $post);
    // il est important d'informer wordpress qu'il peut reprendre sa boucle principale
    wp_reset_postdata();
}

function the_homepage_categories()
{
    // pour chaque catégorie à afficher sur la home
    foreach (FRONTPAGE_CATEGORY_LIST as $category_id) {
        // on récupère l'objet WP_Term
        $category = get_term($category_id);
        // on récupère le template part qui affiche les infos de la catégorie
        // get_template_directory() représente le chemin vers la racine du thème
        // on y ajoute le chemin jusqu'au fichier à inclure
        $template_path = get_template_directory() . '/template-parts/home_category.php';
        include $template_path;
    }
}

function the_categories_links() {
    // récupérer les catégories du post courant
    $categoryList = get_the_category();
    // pour chaque id de catégorie récupéré, on récupère la catégorie elle-même
    foreach ($categoryList as $category) {
        // générer un lien pour chaque catégorie associée au POST
        $category_link = get_category_link($category);
        echo '<a class="post__category-link" href="' . $category_link . '">' . $category->name . '</a>';
    }
}