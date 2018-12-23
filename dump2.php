<?php

include __DIR__ . '/wp-load.php';

function _get_keys($array = [])
{
  // echo '<pre>'; print_r(array_keys((array) $array)); echo '</pre>';
  return array_keys((array) $array);
}

function _clean_content($string = '')
{
  $string = htmlspecialchars(addslashes(stripslashes($string)));
  // $string = str_ireplace('', '', $string);

  return $string;
}

function _get_terms($taxonomy, $table, $return = false)
{
  $query = get_terms([
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC',
    // 'parent' => false,
    // 'hierarchical' => true,
  ]);

  if ($return === true) {
    echo '<pre>'; print_r($query); echo '</pre>';
    return $query;
  }

  // echo '<h3>Taxonomies (Total: '. count($query) .')</h3>';
  foreach ($query as $key => $item) {
    echo "<div>INSERT INTO ". $table ." (id, title, slug, description, parent) VALUES ('". $item->term_id ."', '". addslashes(stripslashes(stripslashes($item->name))) ."', '". $item->slug ."', '". addslashes(stripslashes(stripslashes($item->description))) ."', '". $item->parent ."');</div>";
    // echo '<pre>'; print_r($feature); echo '</pre>';
  }
}

function _get_posts($post_type, $table, $return = false)
{
  $query = get_posts([
    'post_type' => $post_type,
    'post_status' => 'publish',
    'nopaging' => true,
    'ignore_sticky_posts' => true,
    'numberposts' => -1,
    'suppress_filters' => true,
    'orderby' => 'ID',
    'order' => 'ASC',
    // 'parent' => false,
    // 'hierarchical' => true,
    // 'meta_query' => [
    //   [
    //     'key' => 'featured',
    //     'value' => 'yes',
    //     'compare' => '',
    //   ],
    // ],
    // 'tax_query' => [
    //   [
    //     'taxonomy' => 'genre',
    //     'field' => 'slug',
    //     'terms' => 'jazz',
    //   ],
    // ],
  ]);

  $html = '';
  foreach ($query as $key => $item) {
    $item->metas = get_post_meta($item->ID, '', true);
    $query[$key] = $item;

    $html .= "<div>UPDATE listings SET extras = '". json_encode($item->metas) ."' WHERE ID = '". $item->ID ."';</div>";
  }

  if ($return === true) {
    echo '<pre>'; print_r($query); echo '</pre>';
    return $query;
  }

  echo $html;
}

$type = 'property';
$table = 'listings';
// $data = _get_posts($type, $table, true);
$data = _get_posts($type, $table, false);
