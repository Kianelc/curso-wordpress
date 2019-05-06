<?php

//Carrega os scripts e as folhas de estilos
function load_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_scripts');

//Função de configuração do tema
function wpcurso_config(){
    //Registrando o menu
    register_nav_menus( 
        array(
            'my_main_menu' => 'Main Menu',
            'my_bottom_menu' => 'Bottom Menu'
        )
    );

    //Customizando imagens Slide
    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support( 'custom-header', $args );
    //Adicionando imagens nas postagens
    add_theme_support( 'post-thumbnails' );
    //Habilita o tipo de post (se é vídeo, imagem, nota...)
    add_theme_support( 'post-formats', array('video','image') );
    //Torna o title do head dinâmico - é uma boa prática deixar aqui no functions
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'wpcurso_config', 0 );

add_action( 'widgets_init', 'wpcurso_sidebars' );

function wpcurso_sidebars(){
    register_sidebar( 
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar( 
        array(
            'name' => 'Blog Sidebar',
            'id' =>  'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar( 
        array(
            'name' => 'Services 1',
            'id' =>  'services-1',
            'description' => 'First Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar( 
        array(
            'name' => 'Services 2',
            'id' =>  'services-2',
            'description' => 'Second Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar( 
        array(
            'name' => 'Services 3',
            'id' =>  'services-3',
            'description' => 'Third Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}