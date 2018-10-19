<?php

include __DIR__ . '/wp-load.php';

$post_types = [
  'nav_menu_item',
  'page',
  'property',
  'houzez_agency',
  'houzez_agent',
  'post',
];
$results = [];

foreach ($post_types as $index => $post_type) {
  $varname = $post_type;

  $args = [
    'post_type' => [
      $post_type,
    ],
    'post_status' => 'publish',
    'nopaging' => true,
    'ignore_sticky_posts' => true,
    'cache_results' => false,
    'posts_per_page' => -1,
    'orderby' => [
      'ID' => 'ASC',
    ],
  ];

  $query = new WP_Query($args);

  $results[$varname] = $query;

  wp_reset_query();
}

// echo '<pre>'; print_r($results); echo '</pre>';

// MENU
$menu = $results['nav_menu_item']->get_posts();
if (count($menu)) {
  foreach ($menu as $index => $item) {
    $menu[$index]->permalink = get_permalink($item->ID);
  }
}
echo '<pre>'; print_r($menu); echo '</pre>';
