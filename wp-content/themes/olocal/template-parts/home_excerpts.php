<article class="excerpt">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post post--excerpt">
<!--   
    // 2 arguments, la taille, et un array d'attibut pour modifier la class de l'img générée, permets de récupérer l'image du poste courant dans la boucle principale  
    // the_post_thumbnail(
    //   'post-thumbnail', 
    //   [
    //     'class' => 'picsum'
    //   ]
    // ) -->
   
  <img class='picsum' src="https://picsum.photos/500/500?random=<?= mt_rand(1,5) ?>" />
     <h3><?php the_title(); ?></h3>
     <?php the_categories_links() ; ?>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>">Lire la suite</a>
              </article>
              <?php endwhile; endif ?>