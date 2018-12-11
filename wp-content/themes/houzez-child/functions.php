<?php

// code will goes here

// if( !function_exists('houzez_child_scripts') ) {
//   function houzez_child_scripts()
//   {
//     wp_enqueue_script('houzez-child-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), HOUZEZ_THEME_VERSION, true);
//   }
//
//   add_action( 'wp_enqueue_scripts', 'houzez_child_scripts' );
// }

/* <ul class="social">
  <li>
    <a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
  </li>
  <li>
    <a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
  </li>
  <li>
    <a href="#" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
  </li>
  <li>
    <a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
  </li>
</ul> */


// remove_filter( 'the_content', 'wpautop' );
//
// function clear_br($content){
//   return str_replace("<br />","<br clear='none'/>", $content);
// }
// add_filter('the_content', 'clear_br');


add_action('wp_head', 'gcreative_insert_meta_tags');
function gcreative_insert_meta_tags() {
  ?>
  <meta name="google-site-verification" content="B6TNMohZMnu1Ri229CtKk1waahfP3q_S4yM_r3kbhkY" />
  <meta name="msvalidate.01" content="1989FCCA079F206E36DEF426DFD6ED6E" />
  <meta name="yandex-verification" content="6a1ec845117c149f" />
  <?php
}


add_action('wp_footer', 'gcreative_insert_footer');
function gcreative_insert_footer() {
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
  <?php
}


function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link ) {
      if ( 0 === strpos( $link, $home ) ) {
        unset($links[$l]);
      }
    }
}
add_action( 'pre_ping', 'no_self_ping' );


function add_custom_menu() {
  /**
  *	Register nav menus.
  */
  register_nav_menus(
    array(
      'footer-menu-1' => esc_html__( 'Footer Menu 1', 'houzez' ),
      'footer-menu-2' => esc_html__( 'Footer Menu 2', 'houzez' ),
      'footer-menu-3' => esc_html__( 'Footer Menu 3', 'houzez' ),
      'footer-menu-4' => esc_html__( 'Footer Menu 4', 'houzez' ),
    )
  );
}
// add_action( 'after_setup_theme', 'add_custom_menu' );
