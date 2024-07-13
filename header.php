<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lodge</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
        rel="stylesheet">

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
                        <span>
                            Lodge
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <?php /* Primary navigation */ 
                        wp_nav_menu( array(
                        'theme_location'=>'primary',
                        'depth' => 4,
                        'container' => 'nav',
                        'menu_class'=>'navbar-nav',
                        'unstyled',
                        'fallback_cb' => 'Understrap_WP_Bootstrap_Navwalker::fallback',
                        'walker' => new Understrap_WP_Bootstrap_Navwalker())
                        );
                        ?>

                        </div>


                    </div>
                    <div class="quote_btn-container ">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri();?>/images/cart.png" alt="">
                            <div class="cart_number">
                                0
                            </div>
                        </a>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>



                </div>

            </nav>


        </header>
        <!-- end header section -->