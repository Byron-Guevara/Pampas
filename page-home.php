<?php
/**
* Template Name: Home
* 
*/
?>
<?php get_header(); ?>


<div class="contenedor-principal">

    <!-- Sección Principal -->
    <div class="contenedor-general-home">

        <header>
            <div class="cont-icon-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" alt="">
        </header>

        <div class="contenedor-general-contenido">
            <div class="enc">
                <p> <span>WELCOME TO</span> <br> PAMPAS STEAK HOUSE </p>
            </div>
            <div class="cont-botones">
                <button id="dinning">Dining</button>
                <button id="privateDinning">Private Dining</button>
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
    <div class="contenedor-global-menu">
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


    <!-- Seccion Secundaria -->
    <div class="contenedor-general-dinning">
        <div class="contenedor-general-menu">
            <header>
                <div class="cont-icon-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <img src="<?php echo get_template_directory_uri().'/img/logo-negro.png';?>" alt="">
            </header>

            <div class="contenedor-apperizers">
                <div class="info">
                    <p class="tit">Menu</p>
                    <ul>
                        <li>APPETIZERS</li>
                        <li>CHILLED SHELLFISH</li>
                        <li>SOUPS & SALASDS</li>
                        <li>STEAKS & CHOPS</li>
                        <li>SEAFOOD & POULTRY</li>
                        <li>SIDES</li>
                        <li>DESSERTS</li>
                        <li>SUNDAY BRUNCH</li>
                    </ul>
                </div>
                <div class="media">
                    <div class="slider-menu cont-slider owl-carousel owl-theme">
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/appetizers.jpg';?>" alt="">
                        </div>
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/appetizers.jpg';?>" alt="">
                        </div>
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/appetizers.jpg';?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="inf">
                <div class="line"></div>
            </div>
        </div>

        <div class="contenedor-general-story">
            <div class="sup">
                <div class="line"></div>
            </div>
            <div class="contenedor-story">
                <div class="media">
                    <div class="cont-slider">
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/appetizers.jpg';?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="info">
                    <p class="tit">OUR STORY</p>
                    <p class="desc">
                        Pampas Steakhouse is an Argentinian-style cuisine that offers diverse cut and varieties of steaks 
                        and an extensive wine list offered in upscale, wood-paneled quarters. We have received numerous 
                        awards and certifications from recognized associations such as Wine Spectator, Open Table, and Zagat, 
                        among others. We have been named the #1 Steakhouse in Georgia by Open Table diners in 2014. In addition, 
                        we have one of the highest scores in the US by Zagat in the Steakhouse category. We have also been 
                        featured in four of Zagat’s lists including Best Service, Best Décor, Best Steakhouse, and Restaurants 
                        with the Best Food in Atlanta.
                    </p>
                </div>
            </div>
            <div class="inf">
                <div class="line"></div>
            </div>
        </div>


        <div class="contenedor-general-wines">
            <div class="sup">
                <div class="line"></div>
            </div>
            <div class="contenedor-wines">
                <div class="info">
                    <p class="tit">WINES</p>
                    <ul>
                        <li>BY THE GLASS & WINES</li>
                        <li>MALBEX, EUROPE</li>
                        <li>PINOT, MELOT, OTHER REDS</li>
                        <li>CABERNETS</li>
                    </ul>
                </div>
                <div class="media">
                    <div class="slider-menu cont-slider owl-carousel owl-theme">
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/wines.jpg';?>" alt="">
                        </div>
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/wines.jpg';?>" alt="">
                        </div>
                        <div class="cont-slide">
                            <img src="<?php echo get_template_directory_uri().'/img/wines.jpg';?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="inf">
                <div class="line"></div>
            </div>
        </div>


        <div class="contenedor-general-reservaciones">
            <div class="sup">
                <div class="line"></div>
            </div>

            <div class="contenedor-reservaciones">
                <p class="enc">
                    Reservations
                </p>

                <div class="cont-reservaciones">
                    <div class="info">
                        <p class="active">1. FIND A TABLE</p>
                        <p>2. YOUR DETAILS</p>
                    </div>
                    <div class="campos">
                        <select name="" id="">
                            <option value="">4 People</option>
                            <option value="">6 People</option>
                        </select>
                        <select name="" id="">
                            <option value="">Oct31</option>
                            <option value="">Oct32</option>
                        </select>
                        <select name="" id="">
                            <option value="">10:00 pm</option>
                            <option value="">11:00 pm</option>
                        </select>
                        <button>FIND</button>
                    </div>
                    <div class="detalles">
                        <p>9:30 pm</p>
                        <p>9:45 pm</p>
                        <p class="active">10:00 pm</p>
                        <p>10:30 pm</p>
                    </div>
                </div>


            </div>

            <div class="inf">
                <div class="line"></div>
            </div>

        </div>


        <div class="contenedor-general-contacto">
            <div class="sup">
                <div class="line"></div>
            </div>

            <p class="enc">
                CONTACT US
            </p>

            <div class="cont-form">
                <div>
                    <input type="text" placeholder="Name*">
                    <input type="text" placeholder="Phone*">
                    <input type="text" placeholder="Email*">
                </div>
                <div>
                    <textarea placeholder="Message"></textarea>
                    <button> Send </button>
                </div>
            </div>

        </div>



        <div class="contenedor-general-mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2049.126687590956!2d-84.22540604453297!3d34.04843771464178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f59f09039893f7%3A0x662c120f4c393bac!2sPampas%20Steakhouse!5e0!3m2!1ses-419!2smx!4v1583778282050!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>



        <footer>
            <div class="menu">
                <div class="cont-menu">
                    <p class="tit">MENU</p>
                    <ul>
                        <li>APPETIZERS</li>
                        <li>CHILLED SHELLFISH</li>
                        <li>SOUPS & SALASDS</li>
                        <li>STEAKS & CHOPS</li>
                        <li>SEAFOOD & POULTRY</li>
                        <li>SIDES</li>
                        <li>DESSERTS</li>
                        <li>SUNDAY BRUNCH</li>
                    </ul>
                </div>
                <div class="cont-menu">
                    <p class="tit">wines</p>
                    <ul>
                        <li>By the glass & wines</li>
                        <li>malbex, europe</li>
                        <li>pinot, melot, other reds</li>
                        <li>cabernets</li>
                    </ul>
                </div>
            </div>
            <div class="redes">
                <div class="cont-redes">
                    <img src="<?php echo get_template_directory_uri().'/img/icon-facebook.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri().'/img/icon-instagram.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri().'/img/icon-twitter.png';?>" alt="">
                </div>
            </div>
            <div class="contacto">
                <div class="cont-input">
                    <input type="text" placeholder="EMAIL">
                    <button><img src="<?php echo get_template_directory_uri().'/img/icon-emailbutton.png';?>" alt=""></button>
                </div>
                <p>2019 Pampas Steakhouse | Atlanta Georgia |</p>
            </div>
        </footer>

    </div>
    <!-- Seccion Secundaria -->

</div>
<!-- Sección Secundaria -->


<?php get_footer();?>


<script>

    $(document).ready(function(){

        $(".cont-icon-menu").click(function(){
            $(this).children("div").each(function(i){
                var el = $(this);
                setTimeout(function(){
                el.animate()
                        .animate({width: 0}, {duration: 100});
                },i*100);
            });
            setTimeout(function(){
                $(".contenedor-global-menu").addClass("active");
            }, 400);
        });

        $(".close").click(function(){
            $(".contenedor-global-menu").removeClass("active");
            setTimeout(function(){
                $(".cont-icon-menu").each(function(ii){
                        $(this).children("div").each(function(i){
                        var el = $(this);
                        var w = 35 - (i * 7);
                        setTimeout(function(){
                        el.animate()
                                .animate({width: w}, {duration: 100});
                        },i*100);
                    });
                });
            }, 100);
        });

        $("#dinning").click(function(){
            $(".contenedor-general-dinning").addClass("active");
        });


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