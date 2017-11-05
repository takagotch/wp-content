<?php

// カスタムヘッダー
add_theme_support(
  'custom-header',
  array(
    'width' => 950,
    'height' => 295,
    'header-text' => false,
    'default-image' => '%s/photo/fb.jpg',
  )
);

// カスタムメニュー
add_theme_support( 'menus' );
register_nav_menu( 'navigation', 'グローバルナビゲーション' );