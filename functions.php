<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

// Chamar a tag Title e adicionar os formatos de posts
function over_theme_support() {

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image', 'video'));

    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'over_theme_support');

// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'over'),
    "footer" => __('Menu footer', 'over')
));

// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1280, 720, 80, true );


// Definir o tamanho do resumo
add_filter( 'excerpt_length', function($length) {
    return 12;
});

// Definir o estilo da paginação

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-outline"';
}

function show_tags()
{
    $post_tags = get_the_tags();
    $separator = ' | ';
    if (!empty($post_tags)) {
        foreach ($post_tags as $tag) {
            $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
        }
        return trim($output, $separator);
    }
}

// Criar o tipo de post para o banner
function create_post_type() {

    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');

// Criar a barra lateral
// Categoria
register_sidebar(
    array(
        'name' => 'Barra de categorias',
        'id' => 'category',
        'before_widget' => '<aside class="single_sidebar_widget post_category_widget">',
        'after_widget' => '</a></li></ul></aside>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4><ul class="list cat-list"><li><a href="#" class="d-flex">',
));
/*
// posts recentes
register_sidebar(
    array(
        'name' => 'Barra de posts recentes',
        'id' => 'recent-posts',
        'before_widget' => '<aside class="single_sidebar_widget popular_post_widget">',
        'after_widget' => '</a></li></ul></aside>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h4><ul class="list cat-list"><li><a href="#" class="d-flex">',
));
*/

// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));




