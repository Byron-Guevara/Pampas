<?php
/**
* Template Name: Home
* 
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body>


<div class="contenedor-principal">

    <!-- Sección Principal -->
    <div class="contenedor-general-home">

        <header>
            <div class="cont-icon-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" alt="">
            </a>
        </header>

        <div class="contenedor-general-contenido">
            <div class="enc">
                <p> <span>WELCOME TO</span> <br> PAMPAS STEAK HOUSE </p>
            </div>
            <div class="cont-botones">
                <button id="dinning"> <a href="dinning/">Dining</a></button>
                <button id="privateDinning"> <a href="private-dining/">Private Dining</a></button>
            </div>
        </div>

        <footer>
            <div class="info">
                <p>2019 Pampas Steakhouse | Atlanta Georgia | </p>
            </div>
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
        </footer>

    </div>
    <!-- Sección Principal -->

    <!-- Menú Principal -->
    <div class="contenedor-general-menu">
        <div class="columna1">
            <div class="close">
                X
            </div>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" alt="">
            </a>
            <div class="cont-menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Header',
                        'container_class' => 'Header'
                    )
                );
            ?>
            <!--
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
            -->
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

</div>
<!-- Sección Secundaria -->


<?php wp_footer(); ?>
</body>
</html>

<script>

    $(document).ready(function(){

        $(".slider-menu").owlCarousel({
            loop: false,
            items: 1,
            navigation : true,
            nav: true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            navText : ["<img src='<?php echo get_template_directory_uri().'/img/flecha-izq.png';?>'>","<img src='<?php echo get_template_directory_uri().'/img/flecha-der.png';?>'>"]
        });

    });

</script>