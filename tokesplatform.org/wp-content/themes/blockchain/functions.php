<?php

require_once dirname(__FILE__) . '/plugins/blockchain/blockchain.php';

register_nav_menus( array(
    'MainMenu' => 'Главное',
));
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

add_action('wp_ajax_{action}', 'my_action_callback');
add_action('wp_ajax_nopriv_{action}', 'my_action_callback');

function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function get_theme_setting( $setting ) {
    return cmb2_get_option('theme_settings', $setting);
}

function get_post_items($catId) {
    return get_posts([
        'post_type'        => 'POST',
        'posts_per_page'   => -1,
        'category__in' => $catId,
    ]);
}

function get_nav_menu_item_children( $parent_id, $nav_menu_items ) {
    $children = array();
    foreach ( (array) $nav_menu_items as $nav_item ) {
        if ( $nav_item->menu_item_parent == $parent_id ) {
            $children[] = $nav_item;
        }
    }
    return $children;
}

