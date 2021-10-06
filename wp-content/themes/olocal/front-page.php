<?php get_header(''); ?>
<body>
        
    

  <main>
    <section>
   <?php get_template_part('template-parts/home_excerpts'); ?>
    </section>
    <section>
        <header class="commerçants" >
            <h2>Ils nous font confiance</h2>
        </header>
        <article class="excerpt" >
            
            <h3>Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptas temporibus quam eum ullam
                soluta?</p>
        </article>
    </section>
  </main>



  <footer class="footer">
    <section class="footer__info">
        <!-- (div>h4+p)*3 -->
        <div class="footer__info__item">
            <i class="fas fa-envelope"></i>
            <div>
                <h4> E-mail</h4>
                <p>hey@odrive.local</p>
            </div>
        </div>
        <div class="footer__info__item">
            <i class="fas fa-phone-alt"></i>
            <div>
                <h4>Téléphone</h4>
                <p>+33 1 23 45 67 89</p>
            </div>
        </div>
        <div class="footer__info__item">
            <i class="fas fa-home"></i>
            <div>
                <h4>Adresse</h4>
                <p>55 Rue du Faubourg Saint Honoré<br>
                    75008 Paris</p>
            </div>
        </div>
    </section>
    <nav class="footer__menu">
        <ul class="footer__menu__list">
            <li class="footer__menu__item">
                <a href="javascript:void(0)">A propos de nous</a>
            </li>
            <li class="footer__menu__item">
                <a href="javascript:void(0)">Team</a>
            </li>
            <li class="footer__menu__item">
                <a href="javascript:void(0)">Jobs</a>
            </li>
            <li class="footer__menu__item">
                <a href="javascript:void(0)">Press</a>
            </li>
            <li class="footer__menu__item">
                <a href="javascript:void(0)">Mentions légales</a>
            </li>
            <li class="footer__menu__item">
                <a href="javascript:void(0)">FAQ</a>
            </li>
        </ul>
    </nav>
    <nav class="footer__social">
        <ul class="footer__social__list">
            <li class="footer__social__item">
                <a href="javascript:void(0)">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="footer__social__item">
                <a href="javascript:void(0)">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="footer__social__item">
                <a href="javascript:void(0)">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            <li class="footer__social__item">
                <a href="javascript:void(0)">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="footer__social__item">
                <a href="javascript:void(0)">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>

</html>

         
       
    
       
