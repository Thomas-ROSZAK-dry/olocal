<?php get_header(); ?>
<main>
    <?php
    if ( have_posts() ) :
        // Comme je suis dans un template qui n'affichera qu'un seul contenu, je n'ai pas besoin de faire de boucle while
        the_post();

        $category_list = get_the_category();
        ?>
        <article <?php post_class( 'post' ); ?>>
            <header class="post__header">
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail(
                        'post-thumbnail',
                        [
                            'class' => 'post__header__image'
                        ]
                    );
                else :
                ?>
                    <img src="<?= get_theme_file_uri( 'src/images/banner.jpg' ); ?>" class="post__header__image" alt="" />
                <?php
                endif;
                ?>
                <h1 class="post__header__title"><?php the_title(); ?></h1>
            </header>
            <main class="post__content">
                <?php the_content(); ?>
            </main>
            <footer class="post__footer">
                Dans
                <?php
                $category_list_count = count( $category_list );
                $last_category_index = $category_list_count - 1;

                foreach ( $category_list as $category_index => $category ) : ?>
                    <a
                        class="post__footer__category-link"
                        href="<?= get_category_link( $category ); ?>"
                    ><?= $category->name; ?></a><?php

                    if ( $category_index !== $last_category_index ) {
                        echo ', ';
                    }

                endforeach;
                ?>
                le <time class="post__footer__date" datetime="<?= get_the_date( 'Y-m-d' ); ?>"><?= get_the_date(); ?></time>
            </footer>
        </article>
        <?php
    endif;
    ?>
</main>
<section class="pagination">
    <!-- <a class="pagination--previous-link button" href="./single.html">Article précédent</a> -->
    <!-- <a class="pagination--next-link button" href="./single.html">Article suivant</a> -->
    <?php previous_post_link( '%link', '%title', true ); ?>
    <?php next_post_link( '%link', '%title', true ); ?>
</section>

<?php get_footer(); ?>