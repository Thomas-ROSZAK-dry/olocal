<?php get_header(); ?>
  <main class="post-list">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post post--excerpt">
      <?php
        the_post_thumbnail(
          'post-thumbnail',
          [
              'class' => 'post__image'
          ]
        )
      ?>
      <h3 class="post__title"><?php the_title(); ?></h3>
      <?php the_categories_links(); ?>
      <p class="post__excerpt"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
    </article>
<?php endwhile; endif; ?>  
  </main>
  <section class="pagination">
    <?php
      $prev_link = get_previous_posts_link();
      $next_link = get_next_posts_link();
    
      if ($prev_link) :
    ?>
    <a class="button" href="<?php previous_posts(); ?>">Articles plus récents</a>
    <?php 
      endif;
      if ($next_link) :
    ?>
    <a class="button" href="<?php next_posts(); ?>">Articles plus anciens</a>
    <?php endif; ?>
  </section>
  <footer class="footer">
    <nav class="menu menu--footer">
      <ul class="menu__list">
        <li class="menu__list__item">
          <a href="#" class="menu__list__item__link">Mentions légales</a>
        </li>
      </ul>
    </nav>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
© 2021 GitHub, Inc.
Terms
