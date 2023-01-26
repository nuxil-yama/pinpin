<?php
/**
 * プラグインの追加作業等の処理を禁止にする.
 */
// define('DISALLOW_FILE_EDIT', true);
// define('DISALLOW_FILE_MODS', true);
// define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * 更新通知を非表示.
 */
function update_nag_hide()
{
    remove_action('admin_notices', 'update_nag', 3);
}
add_action('admin_init', 'update_nag_hide');

/**
 * メニューの非表示.
 */
function remove_menus()
{
    global $menu;
    unset($menu[5]); // 投稿
    unset($menu[25]); // コメント
    // unset($menu[60]);	// 外観
    // unset($menu[65]); // プラグイン
    // unset($menu[70]);
    // remove_menu_page('edit.php?post_type=acf');
    // remove_menu_page('edit.php?post_type=acf-field-group');
    // remove_menu_page( 'siteguard' );
    // unset($menu[20]);	// 固定ページ
    // unset($menu[70]); // プロフィール
    unset($menu[75]); // ツール
    // unset($menu[80]); // 設定
    // unset($menu[90]); // メニューの線3
}
add_action('admin_menu', 'remove_menus');

// /*
//  * ログイン時の管理ツールバーを非表示
//  */
// show_admin_bar(false);

/*
 * Yoastでtitleタグ表示処理
 */
// add_theme_support('title-tag');

/*
 * RSSフィードの有効化
 */
// add_theme_support('automatic-feed-links');

/*
 * アイキャッチ画像の入力表示
 */
add_theme_support('post-thumbnails');

/*
 * the_excerptの改修.
 */
// function new_excerpt_more($more)
// {
//     return '...';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

/*
 * Yoast WordPress SEOからのCanonicalを無効に
 */
// add_filter('wpseo_canonical', '__return_false');

/*
 * お知らせ ====================================================
 */
add_action('init', 'my_custom_news');
function my_custom_news()
{
    $labels = [
        'name' => _x('お知らせ', 'post type general name'),
        'singular_name' => _x('news', 'post type singular name'),
        'add_new' => _x('新しくお知らせを書く', 'news'),
        'add_new_item' => __('お知らせ記事を書く'),
        'edit_item' => __('お知らせ記事を編集'),
        'new_item' => __('新しいお知らせ記事'),
        'view_item' => __('お知らせ記事を見る'),
        'search_staff' => __('お知らせ記事を探す'),
        'not_found' => __('お知らせ記事はありません'),
        'not_found_in_trash' => __('ゴミ箱にお知らせ記事はありません'),
        'parent_item_colon' => '',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => [
            'slug' => 'news',
            'with_front' => false,
        ],
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'],
        'has_archive' => true,
    ];
    register_post_type('news', $args);
}
/* ---- お知らせタクソノミー追加 ---- **/
add_action('init', 'create_newscat_taxonomy', '0');
function create_newscat_taxonomy()
{
    $taxonomylabels = [
        'name' => _x('newscat', 'post type general name'),
        'singular_name' => _x('newscat', 'post type singular name'),
        'search_items' => __('newscat'),
        'all_items' => __('newscat'),
        'parent_item' => __('Parent Cat'),
        'parent_item_colon' => __('Parent Cat:'),
        'edit_item' => __('お知らせカテゴリーを編集'),
        'add_new_item' => __('お知らせカテゴリーを書く'),
        'menu_name' => __('お知らせカテゴリー'),
    ];
    $args = [
        'labels' => $taxonomylabels,
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'newscat'],
    ];
    register_taxonomy('newscat', 'news', $args);
}
