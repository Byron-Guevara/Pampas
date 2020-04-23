<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body>



    <!-- Header -->
    <header>
        <div class="contenedor-general-header">
            <div class="cont-icon-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/img/logo-negro.png'; ?>" alt="">
        </div>
    </header>
    <!-- Header -->

    <!-- Menú Principal -->
    <div class="contenedor-general-menu">
        <div class="columna1">
            <div class="close">
                X
            </div>
            <img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" alt="">
            <div class="cont-menu">
                <ul>
                    <li>Menu</li>
                    <li>
                        Restaurant
                        <ul>
                            <li>About Us</li>
                            <li>Careers</li>
                            <li>Contact Us</li>
                        </ul>
                    </li>
                    <li>Location</li>
                    <li>Private Dinning</li>
                    <li>Reservations</li>
                    <li>Gift Cards</li>
                </ul>
            </div>
            <div class="cont-contact">
                <p>Call Now!</p>
                <a href="">(678) 339-0029</a>
                <div class="redes">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/img/icon-facebook.png';?>" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/img/icon-instagram.png';?>" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/img/icon-twitter.png';?>" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="columna2">

        </div>
    </div>
    <!-- Menú Principal -->