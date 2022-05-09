<?php

function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . 'style.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );   
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


function theme_js(){
	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '','', false );
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '','', false );

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-scrollto.js' , array('jquery'), '', true );
    //wp_enqueue_script( 'np_js', get_template_directory_uri() . '/js/npm.js', array('jquery'), '', true );
    wp_enqueue_script( 'type_js', get_template_directory_uri() . '/js/typed.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'fa_js', get_template_directory_uri() . '/js/faq.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu'   => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );

function create_widget( $name, $id, $description ) {
    register_sidebar(array(
        'name' => __( $name ),   
        'id' => $id, 
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function bootstraptowordpress_setup(){
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumbnail', 180, 120, true );
    add_image_size( 'medium-thumbnail', 280, 220, true);
    add_image_size( 'banner-image',180, 120, true );
}

add_action( 'after_setup_theme', 'bootstraptowordpress_setup' );  
?>