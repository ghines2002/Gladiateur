<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive plants website - Bedimcode</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> Green House
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#event" class="nav__link">events</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact Us</a>
                        </li>

                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/home.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            La nature chez vous , <br> en un clic
                        </h1>
                        <p class="home__description">
                             Green House est la destination en ligne ultime pour les amateurs de jardinage et les amoureux de la nature .
                        </p>
                        <a href="#about" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Qui nous sommes vraiment & <br> Pourquoi nous choisir
                        </h2>

                        <p class="about__description">
                            Nous avons plus de 4000 avis impartiaux, et nos clients font confiance à notre 
                            processus de production ainsi qu'à notre service de livraison à chaque fois.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Nous livrons toujours à temps.                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Nous vous donnons des guides pour protéger et prendre soin de vos produits.                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Nous venons toujours pour une vérification après la vente.                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% satisfait ou remboursé.
                            </p>
                        </div>

                        <a href="#" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Consultez nos <br> produits
                </h2>

                <p class="product__description">
                    Achetez et profitez de la meilleure qualité .
                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product1.png" alt="" class="product__img">

                        <span class="product__price">Fleurs</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product2.png" alt="" class="product__img">

                        
                        <span class="product__price">Fruits Bio</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product3.png" alt="" class="product__img">

                        <span class="product__price">Légumes Bio</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product4.png" alt="" class="product__img">

                        <span class="product__price">Herbes Aromatiques</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product5.png" alt="" class="product__img">

                        <span class="product__price">Plantes</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product6.png" alt="" class="product__img">

                        <span class="product__price"> Produits Biologique</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Voici quelques questions <br> fréquemment posées. 
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Comment puis-je prendre soin de mes plantes bio pour qu'elles restent en bonne santé ?

                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Pour prendre soin de vos plantes bio, assurez-vous de leur donner suffisamment de lumière, d'eau et de nutriments. Évitez d'utiliser des pesticides ou des engrais chimiques, et utilisez plutôt des produits naturels pour les protéger contre les maladies et les ravageurs.

                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Est-ce que vos produits sont certifiés biologiques ?                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Oui, nos produits sont certifiés biologiques. Nous sommes fiers de proposer des produits de haute qualité qui sont cultivés de manière responsable et durable.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                </h3>Comment puis-je passer une commande et quels sont les modes de paiement disponibles ?
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Pour passer une commande, vous pouvez  sélectionner les produits que vous souhaitez acheter. Nous acceptons plusieurs modes de paiement
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Est-ce que vous livrez dans ma région et combien cela coûte-t-il ?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Nous livrons dans certaines régions et les frais de livraison dépendent de votre emplacement. 
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Avez-vous des conseils pour cuisiner des produits bio de manière savoureuse ?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Pour cuisiner des produits bio de manière savoureuse, utilisez des ingrédients frais et de saison. Évitez les aliments transformés et privilégiez les recettes simples et saines qui mettent en valeur la saveur naturelle des aliments
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Puis-je retourner un produit si je ne suis pas satisfait(e) ?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Oui, vous pouvez retourner un produit si vous n'êtes pas satisfait(e). Veuillez consulter notre politique de retour pour plus d'informations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!--==================== Evenements ====================-->
             <section class="event section container" id="event">
                <div class="event__container grid">

                    <img src="assets/img/eventt.jpeg" alt="" class="event__img">
                      
                    <div class="event__data">
                        <h2 class="section__title event__title">
                           reserver vos places <br> 
                        </h2>
            
    <center>
        <h1><font color="violet">Liste des evenements:</font></h1>
        <h2>
            <a href="AjouterEvenement.php">Ajouter Evenement</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Duree</th>
            <th>Organisateur</th>
            <th>Prix</th>
            <th>Capacite</th>
            <th>Description</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        
include '../view/AfficherEvenement.php';

//$livraisonC = new livraisonC();
$liste = $EvenementE->Afficher();
?> 
    </table>

                        <a href="#" class="button--link button--flex">
                            book now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>

            </section>



            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Contactez-Nous Dès  Aujourd'hui  <br> En utilisant l'une Des Informations <br> Fournies
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    +216 93023244                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                      GreenHouse@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Envoyer le message
                                                        <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Green House
                    </a>

                    <h3 class="footer__title">
                        Inscrivez-vous à notre newsletter <br>  pour rester informé(e) 
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            S'abonner
                                                        <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Notre adresse                    </h3>

                    <ul class="footer__data">
                        <li class="footer__information">Route de Bizerte GP8</li>
                        
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contactez-nous</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+21693023244</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
              Nous acceptons toutes les cartes de crédit
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
