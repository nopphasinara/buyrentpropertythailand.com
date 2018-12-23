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

  // echo '<h3>Data (Total: '. count($query) .')</h3>';
  $html = '';
  $all_meta_keys = [];
  foreach ($query as $key => $item) {
    // echo '<pre>'; print_r($item); echo '</pre>';
    $all_user_metas = [];
    $metas = get_post_meta($item->ID, '', true);
    $meta_keys = _get_keys($metas);
    $thumbnail = get_the_post_thumbnail_url($item, 'full');
    $thumbnail = str_ireplace('https://v2.buyrentpropertythailand.com/wp-content/uploads/', '', $thumbnail);

    $item->metas = $metas;
    $item->image = $thumbnail;

    if ($meta_keys) {
      foreach ($meta_keys as $key2 => $item2) {
        if (!in_array($item2, $all_meta_keys)) {
          $all_meta_keys[] = $item2;
        }
      }
    }

    // $html .= "INSERT INTO ". $table ." (id, title, slug, description, content, author_id, parent_id, status, extras, created_at, updated_at, featured, image) VALUES ('". $item->ID ."', '". _clean_content($item->post_title) ."', '". $item->post_name ."', '". _clean_content($item->post_excerpt) ."', '". _clean_content($item->post_content) ."', '". $item->post_author ."', '". $item->post_parent ."', '". $item->post_status ."', '', '". $item->post_date ."', '". $item->post_modified ."', '". $item->metas['fave_featured'][0] ."', 'listing/". $thumbnail ."');<br>";


    $user_id = $item->post_author;
    if (isset($item->metas['fave_agents'][0])) {
      $user_id = $item->metas['fave_agents'][0];
      $user_metas = get_post_meta($user_id, '', true);
      if ($user_metas) {
        if (isset($user_metas['houzez_user_meta_id'][0])) {
          $user_id = $user_metas['houzez_user_meta_id'][0];
        }
      }
    }
    $user = get_user_by('ID', $user_id);

    $item->metas['user_id'] = $user_id;
    $item->metas['user'] = $user;

    $extras = [
      'fave_additional_features_enable' => $item->metas['fave_additional_features_enable'][0],
      'additional_features' => $item->metas['additional_features'][0],
      'fave_agents' => $item->metas['fave_agents'][0],
      'fave_payment_status' => $item->metas['fave_payment_status'][0],
      'fave_private_note' => _clean_content($item->metas['fave_private_note'][0]),
      'fave_prop_homeslider' => _clean_content($item->metas['fave_prop_homeslider'][0]),
      'fave_prop_slider_image' => _clean_content($item->metas['fave_prop_slider_image'][0]),
      'user_id' => $user_id,
    ];
    // $item->extras = $extras;
    $item->extras = $item->metas;

    $html .= "UPDATE listings SET extras = '". json_encode($item->extras) ."' WHERE id = '". $item->ID ."';<br>";

    $query[$key] = $item;
  }

  if ($return === true) {
    // echo '<pre>'; print_r($all_meta_keys); echo '</pre>';
    echo '<pre>'; print_r($query); echo '</pre>';

    return $query;
  }

  echo $html;
}

$type = 'property';
$table = 'listings';
// $data = _get_posts($type, $table, true);
$data = _get_posts($type, $table, false);
