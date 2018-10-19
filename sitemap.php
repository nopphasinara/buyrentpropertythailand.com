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

// MENU


echo '<pre>'; print_r($results); echo '</pre>';
