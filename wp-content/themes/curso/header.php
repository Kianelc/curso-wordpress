<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(array('class' => 'd-flex flex-column h-100')); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">Icones Sociais</div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-right">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-6">Pin Ki</section>
                    <nav class="main-menu col-md-10 text-right">
                        <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu') ) ?>
                    </nav>
                </div>
            </div>  
        </section>
    </header>