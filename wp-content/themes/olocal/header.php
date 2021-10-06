<?php get_template_part('template-parts/header_start'); ?>
  <header class="header">
    <div class="logo">
      <img src="./images/logo.svg" class="logo__image" alt="" />
      <a href="./index.html" class="logo__text">oLocal</span>
    </div>
    <!-- <nav class="menu">
      <ul class="menu__list">
        <li class="menu__list__item"><a class="menu__list__item__link" href="./category.html">Escales</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="./category.html">Semaines en mer</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="./category.html">Rencontres</a></li>
      </ul>
    </nav> -->
    <?php
        wp_nav_menu([
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu',
            'menu_class' => 'menu__list'
        ]);
    ?>
      <div class="main">
        <h2 class="main__title">Bienvenue sur notre site de drive !</h2>
        <p class="mainHome__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, ad alias in magnam
          molestiae eligendi nam, libero ut voluptatibus ab perspiciatis quas incidunt accusamus iusto quod eos nisi quasi
          atque, quos ratione. Accusantium saepe, doloribus expedita iusto et dolorem, facilis quos dolorum illo commodi
          quis beatae asperiores corporis? Nesciunt, quasi commodi velit eum neque reiciendis soluta veritatis, aliquam,
          exercitationem nisi temporibus recusandae ipsum illo possimus repudiandae? Aspernatur aliquam culpa ducimus sed
          totam nesciunt, hic asperiores odit magnam quos assumenda necessitatibu. Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Harum similique adipisci pariatur explicabo, odio consequuntur cumque ipsum aliquam doloribus
          distinctio. </p>
      </div>
     
  </header>