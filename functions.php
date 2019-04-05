<?php
add_theme_support('menus');
//ナビリンクの設定
register_nav_menu( 'header-navi', 'ヘッダーナビ' );

//サムネイル画像のファンクション
add_theme_support('post-thumbnails');
add_image_size( 'single-thumb', '1000', 9999,true);

//the_excerptのpタグを無くす
remove_filter('the_excerpt', 'wpautop');

//ウィジェットのファンクション
function add_widget_Support() {
      register_sidebar( array(
                      'name'          => 'Sidebar',
                      'id'            => 'sidebar',
                      'before_widget' => '<div>',
                      'after_widget'  => '</div>',
                      'before_title'  => '<h3>',
                      'after_title'   => '</h3>',
      ) );
}

add_action( 'widgets_init', 'add_Widget_Support' );

?>
