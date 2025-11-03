<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <?php
            foreach ($cssPaths as $path) { ?> 
                <link rel="stylesheet" href="<?= $path ?>">
            <?php }
        ?>
    </head>
    <body>
        <section id="header-app">
            <div class="logo v-center logo-header-cls hover hover" data-link="home">
                <div class="header-web">
                    <img class="logo-trans none" src="<?= $logoTrans ?>">
                    <img class="logo-white none" src="<?= $logoWhite ?>">
                </div>
                <div class="header-mobile">
                    <img src="<?= $logoWhite ?>">
                </div>
            </div>
            <div class="items items-trans header-web">
                <ul class="v-center">
                    <li>
                        <span class="home-cls hover" data-link="home">Accueil</span>
                    </li>
                    <li>
                        <span class="products-cls hover" data-link="products">Produits</span>
                    </li>
                    <li>
                        <span class="service-cls hover" data-link="service">Services</span>
                    </li>
                    <li>
                        <span class="portfolio-cls hover" data-link="portfolio">Portfolio</span>
                    </li>
                </ul>
            </div>
            <div class="contact contact-trans v-center header-web">
                <span class="contact-header-cls hover" data-link="home">Nous contacter</span>
            </div>
            <div class="burger v-center header-mobile">
                <i class="fa-solid fa-bars shadow-sm bg-light"></i>
            </div>
        </section>
        <div class="fake"></div>
        <div class="dropdown bg-light none">
            <ul>
                <li style="border-top: 1px solid #436c84;">
                    <a href="{{ path('app_home') }}">Accueil</a>
                </li>
                <li>
                    <a href="{{ path('app_products') }}">Produits</a>
                </li>
                <li>
                    <a href="{{ path('app_services') }}">Services</a>
                </li>
                <li>
                    <a href="{{ path('app_portfolio') }}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ path('app_home') }}#commande">Nous contacter</a>
                </li>
            </ul>
        </div>
        <div class="head-content header-web">
            <?php $screen = 'web'; include $headPath; ?>
        </div>
        <div class="head-content header-mobile">
            <?php $screen = 'mobile'; include $headPath; ?>
        </div>