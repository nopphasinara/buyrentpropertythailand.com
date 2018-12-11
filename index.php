<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);


// require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//
// session_start();
//
// $client = new Google_Client();
// $client->setAuthConfig($_SERVER['DOCUMENT_ROOT'] . '/client_secret.json');
// $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
//
// if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
//   $client->setAccessToken($_SESSION['access_token']);
//   $drive = new Google_Service_Drive($client);
//   $files = $drive->files->listFiles(array())->getItems();
//   echo json_encode($files);
// } else {
//   $redirect_uri = 'https://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php';
//   header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
// }

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
