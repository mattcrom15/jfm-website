<?php

//load css

function load_css(){

    // //load bootstrap css

    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), false,'all');

    // wp_enqueue_style('bootstrap');

    // load my css
    wp_register_style('main', get_template_directory_uri() . '/css/main.css',array(), false,'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

//load js 

function load_js(){


    //load jquery
    wp_enqueue_script('jquery');

    // //load bootstrap js

    // wp_register_script('bootstrapjs',  get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

    // wp_enqueue_script('bootstrapjs');

    wp_register_script('myjs',  get_template_directory_uri() . '/js/script.js', 'jquery', false, true);

    wp_enqueue_script('myjs');



}
add_action('wp_enqueue_scripts','load_js');

//theme options

add_theme_support('menus');
add_theme_support('product-thumbnails');
add_theme_support('post-thumbnails');

//custom image sizes
add_image_size( 'product-thumbnails', 700,700, true );


// menus
register_nav_menus(
    array(

        'main-menu'=> 'Main Menu',
    )
);

// custom post type

function my_first_post_type(){
    // build custom post on the left toolbar
    $args = array(
        'labels' => array(
                'name' => 'Your Products',
                'singular_name'=> 'product'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports'=> array('title','editor','thumbnail'),
        
    );

    register_post_type('collection',$args);

}

add_action('init', 'my_first_post_type');

function my_first_taxonomy(){

    $args = array(
        'labels' => array(
                'name' => 'Product types',
                'singular_name'=> 'product type'
        ),
        'public' => true,
        'hierarchical' => true,
        
    );  

    register_taxonomy('Product types', array('collection'), $args);

    
}
 add_action('init', 'my_first_taxonomy');


 add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

 function special_nav_class ($classes, $item) {
   if (in_array('current-menu-item', $classes) ){
     $classes[] = 'active ';
   }
   return $classes;
 }

 