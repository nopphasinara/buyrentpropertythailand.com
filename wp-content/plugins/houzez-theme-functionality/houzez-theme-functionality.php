<?php
/*
Plugin Name: Houzez Theme - Functionality
Plugin URI:  http://themeforest.net/user/favethemes
Description: Adds functionality to Favethemes Themes
Version:     1.5.0
Author:      Favethemes
Author URI:  http://themeforest.net/user/favethemes
License:     GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'HOUZEZ_PLUGIN_URL',               plugin_dir_url( __FILE__ ));
define( 'HOUZEZ_PLUGIN_PATH',              dirname( __FILE__ ));
define( 'HOUZEZ_ADMIN_IMAGES_URL',         HOUZEZ_PLUGIN_URL  . 'assets/images/');
define( 'HOUZEZ_TEMPLATES',                HOUZEZ_PLUGIN_PATH . '/templates/');
define( 'HOUZEZ_DS',                       DIRECTORY_SEPARATOR);
define( 'HOUZEZ_PLUGIN_BASENAME',          plugin_basename(__FILE__));

//Main plugin file
require_once 'classes/class-houzez-init.php';

register_activation_hook( __FILE__, array( 'Houzez', 'houzez_plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Houzez', 'houzez_plugin_deactivate' ) );


// Initialize plugin.
Houzez::run();