<?php 

function plz_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}

add_action("after_setup_theme","plz_theme_supports");

function plz_add_custom_post_type(){

$labels = array(
    'name' => 'Productos',
    'singular_name' => 'Producto',
    'all_items' => 'Todos los productos',
    'add_new' => 'Añadir producto'
);
    
$args = array(
    'labels'             => $labels,
    'description'        => 'Lista de producto',
    'public'             => true,
    'publicly_queryable' => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'productos' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    'taxonomies'         => array('category'),
    'show_in_rest'       => true,
    'menu_icon'          => 'dashicons-cart'
);


register_post_type('producto',$args);
}

add_action("init","plz_add_custom_post_type");