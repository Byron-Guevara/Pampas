<?php
/**
* Template Name: Dinner Menu
* 
*/
?>

<?php get_header(); ?>

<div class="contenedor-wrapper">

    <div class="contenedor-general-dinnermenu">
        <p class="enc">
            DINNER MENU
        </p>
        <div class="contenedor-dinnermenu">
                <div class="info">
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
    </div>


    <div class="contenedor-general-appetizers">
        <p class="enc">
        appetizers
        </p>
        <div class="contenedor-appetizers">
            <p class="tit">
            Empanadas
            </p>
            <p>
            Beef Tenderloin, Ham & Cheese, Chicken, Corn & Cheese    
            </p>
            <p class="tit">
            Argentinean Sausage
            </p>
            <p>
            House Pork Sausages
            </p>
            <p class="tit">
            Grilled Provolone
            </p>
            <p>
            Provolone Cheese, Prosciutto di Parma, Tomatoes, Roasted Red Peppers  
            </p>
            <p class="tit">
            Tuna Tartare*
            </p>
            <p>
            Avocado, Tomatoes, Balsamic Glaze, Sesame Seeds, Spicy Aioli  
            </p>
            <p class="tit">
            Hudson Valley Foie Gras*
            </p>
            <p>
            Sour Cherry Jam, Brioche Toast, Micro Greens
            </p>
            <p class="tit">
            Lobster Tail
            </p>
            <p>
            Flash Fried Lobster Tail, Maytag Blue Cheese Potato Chips
            </p>
            <p class="tit">
            Crab Cake
            </p>
            <p>
            Colossal Crab, Chives, Apples, Capers, Lemon Beurre Blanc
            </p>
            <p class="tit">
            Beef Carpaccio*
            </p>
            <p>
            Arugula, Parmigiano-Reggiano, Capers, Mustard Aioli, Truffle Oil
            </p>
            <p class="tit">
            Fritto Misto
            </p>
            <p>
            Flash Fried Calamari, Rock Shrimp, Bay Scallops, Fish, Tomato Relish
            </p>
            <p class="tit">
            Pampas Tower
            </p>
            <p>
            Grilled Provolone, House Pork Sausage, Empanada, Sweetbread 
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>


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