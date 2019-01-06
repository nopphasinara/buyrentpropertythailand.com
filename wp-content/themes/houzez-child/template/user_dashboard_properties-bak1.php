<?php
session_start();

/**
 * Template Name: User Dashboard Properties
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 15/10/15
 * Time: 3:33 PM
 */
if ( !is_user_logged_in() ) {
    wp_redirect(  home_url() );
}

global $houzez_local, $prop_featured, $current_user, $post;

wp_get_current_user();
$userID         = $current_user->ID;
$user_login     = $current_user->user_login;
$edit_link      = houzez_dashboard_add_listing();
$paid_submission_type = esc_html ( houzez_option('enable_paid_submission','') );
$packages_page_link = houzez_get_template_link('template/template-packages.php');

get_header();

if( isset( $_GET['prop_status'] ) && $_GET['prop_status'] == 'approved' ) {
    $qry_status = 'publish';

} elseif( isset( $_GET['prop_status'] ) && $_GET['prop_status'] == 'pending' ) {
    $qry_status = 'pending';

} elseif( isset( $_GET['prop_status'] ) && $_GET['prop_status'] == 'expired' ) {
    $qry_status = 'expired';
}  elseif( isset( $_GET['prop_status'] ) && $_GET['prop_status'] == 'draft' ) {
    $qry_status = 'draft';
} else {
    $qry_status = 'any';
}
$sortby = '';
if( isset( $_GET['sortby'] ) ) {
    $sortby = $_GET['sortby'];
}
$no_of_prop   =  '9';
$paged        = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'        =>  'property',
    'author'           =>  $userID,
    'paged'             => $paged,
    'posts_per_page'    => $no_of_prop,
    'post_status'      =>  array( $qry_status )
);
if( isset ( $_GET['keyword'] ) ) {
    $keyword = trim( $_GET['keyword'] );
    if ( ! empty( $keyword ) ) {
        $args['s'] = $keyword;
    }
}
$args = houzez_prop_sort ( $args );
$prop_qry = new WP_Query($args);
?>
<?php get_template_part( 'template-parts/dashboard', 'menu' ); ?>

    <div class="user-dashboard-right dashboard-with-panel">

        <?php get_template_part( 'template-parts/dashboard-title' ); ?>

        <div class="dashboard-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="my-profile-search">
                            <div class="profile-top-left">
                                <form method="get" action="">
                                    <input type="hidden" name="prop_status" value="<?php echo isset($_GET['prop_status']) ? $_GET['prop_status'] : '';?>">
                                    <div class="single-input-search">
                                        <input class="form-control" name="keyword" placeholder="<?php echo esc_html__('Search listing', 'houzez'); ?>" type="text">
                                        <button type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <div class="profile-top-right">
                                <div class="sort-tab text-right">
                                    <?php esc_html_e( 'Sort by:', 'houzez' ); ?>
                                    <select id="sort_properties" class="selectpicker bs-select-hidden" title="" data-live-search-style="begins" data-live-search="false">
                                        <option value=""><?php esc_html_e( 'Default Order', 'houzez' ); ?></option>
                                        <option <?php if( $sortby == 'a_price' ) { echo "selected"; } ?> value="a_price"><?php esc_html_e( 'Price (Low to High)', 'houzez' ); ?></option>
                                        <option <?php if( $sortby == 'd_price' ) { echo "selected"; } ?> value="d_price"><?php esc_html_e( 'Price (High to Low)', 'houzez' ); ?></option>
                                        <option <?php if( $sortby == 'featured' ) { echo "selected"; } ?> value="featured"><?php esc_html_e( 'Featured', 'houzez' ); ?></option>
                                        <option <?php if( $sortby == 'a_date' ) { echo "selected"; } ?> value="a_date"><?php esc_html_e( 'Date Old to New', 'houzez' ); ?></option>
                                        <option <?php if( $sortby == 'd_date' ) { echo "selected"; } ?> value="d_date"><?php esc_html_e( 'Date New to Old', 'houzez' ); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="my-property-listing">

                            <?php if( $prop_qry->have_posts() ) { ?>

                                <div class="row grid-row">
                                    <?php

                                    while ($prop_qry->have_posts()): $prop_qry->the_post();
                                        $post_meta_data     = get_post_custom($post->ID);
                                        $prop_images        = get_post_meta( get_the_ID(), 'fave_property_images', false );
                                        $prop_address       = get_post_meta( get_the_ID(), 'fave_property_map_address', true );
                                        $prop_featured       = get_post_meta( get_the_ID(), 'fave_featured', true );
                                        $prop_agent_display = get_post_meta( get_the_ID(), 'fave_agent_display_option', true );

                                        get_template_part('template-parts/dashboard_property_unit');

                                    endwhile;
                                    ?>
                                </div>
                                <?php
                            } else {
                                print '<h4>'.$houzez_local['properties_not_found'].'</h4>';
                            }?>

                            <hr>

                            <?php if ($_SERVER['REMOTE_ADDR'] == '114.109.15.179') { ?>
                              <?php
                              // Load the Google API PHP Client Library.
                              require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

                              $analytics = initializeAnalytics();
                              $profile = getFirstProfileId($analytics);
                              $results = getResults($analytics, $profile);
                              printResults($results);

                              function initializeAnalytics()
                              {
                                // Creates and returns the Analytics Reporting service object.

                                // Use the developers console and download your service account
                                // credentials in JSON format. Place them in this directory or
                                // change the key file location if necessary.
                                $KEY_FILE_LOCATION = $_SERVER['DOCUMENT_ROOT'] . '/client_secret.json';

                                // Create and configure a new client object.
                                $client = new Google_Client();
                                $client->setApplicationName("Hello Analytics Reporting");
                                $client->setAuthConfig($KEY_FILE_LOCATION);
                                $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
                                $analytics = new Google_Service_Analytics($client);

                                return $analytics;
                              }

                              function getFirstProfileId($analytics) {
                                // Get the user's first view (profile) ID.

                                // Get the list of accounts for the authorized user.
                                $accounts = $analytics->management_accounts->listManagementAccounts();

                                if (count($accounts->getItems()) > 0) {
                                  $items = $accounts->getItems();
                                  $firstAccountId = $items[0]->getId();

                                  // Get the list of properties for the authorized user.
                                  $properties = $analytics->management_webproperties
                                      ->listManagementWebproperties($firstAccountId);

                                  if (count($properties->getItems()) > 0) {
                                    $items = $properties->getItems();
                                    $firstPropertyId = $items[0]->getId();

                                    // Get the list of views (profiles) for the authorized user.
                                    $profiles = $analytics->management_profiles
                                        ->listManagementProfiles($firstAccountId, $firstPropertyId);

                                    if (count($profiles->getItems()) > 0) {
                                      $items = $profiles->getItems();

                                      // Return the first view (profile) ID.
                                      return $items[0]->getId();

                                    } else {
                                      throw new Exception('No views (profiles) found for this user.');
                                    }
                                  } else {
                                    throw new Exception('No properties found for this user.');
                                  }
                                } else {
                                  throw new Exception('No accounts found for this user.');
                                }
                              }

                              function getResults($analytics, $profileId = '182775723') {
                                // echo '<pre>'; print_r($analytics); echo '</pre>';

                                // Calls the Core Reporting API and queries for the number of sessions
                                // for the last seven days.
                                $params = array(
                                  'dimensions' => 'ga:landingPagePath,ga:pageTitle',
                                  'sort' => '-ga:pageviews',
                                );

                                return $analytics->data_ga->get(
                                  'ga:' . $profileId,
                                  '30daysAgo',
                                  'today',
                                  'ga:pageviews',
                                  $params
                                );
                              }

                              function printResults($results) {
                                if (count($results->getRows()) > 0) {
                                  $html = '';
                                  $headers = $results->getColumnHeaders();

                                  foreach ($headers as $header) {
                                    $html .= "<p>Column Name = {$header->getName()} | Column Type = {$header->getColumnType()} | Column Data Type = {$header->getDataType()}</p>";
                                  }
                                  echo $html;

                                  $table .= '<table>';
                                  // Print headers.
                                  $table .= '<tr>';
                                  foreach ($results->getColumnHeaders() as $header) {
                                    $table .= '<th>' . $header->name . '</th>';
                                  }
                                  $table .= '</tr>';
                                  // Print table rows.
                                  foreach ($results->getRows() as $row) {
                                    $table .= '<tr>';
                                    foreach ($row as $cell) {
                                      $table .= '<td>' . htmlspecialchars($cell, ENT_NOQUOTES) . '</td>';
                                    }
                                    $table .= '</tr>';
                                  }
                                  $table .= '</table>';

                                  echo $table;

                                  echo '<pre>'; print_r($results->getTotalsForAllResults()); echo '</pre>';
                                  echo '<pre>'; print_r($results->getTotalResults()); echo '</pre>';
                                  echo '<pre>'; print_r($results->getQuery()); echo '</pre>';
                                  echo '<pre>'; print_r($results->getColumnHeaders()); echo '</pre>';

                                  echo '<pre>'; print_r(get_class_methods($results)); echo '</pre>';
                                  // echo '<pre>'; print_r($results); echo '</pre>';
                                } else {
                                  $table .= '<p>No Results Found.</p>';
                                  echo $table;
                                }



                                /* // Parses the response from the Core Reporting API and prints
                                // the profile name and total sessions.
                                if (count($results->getRows()) > 0) {

                                  // Get the profile name.
                                  $profileName = $results->getProfileInfo()->getProfileName();

                                  // Get the entry for the first entry in the first row.
                                  $rows = $results->getRows();
                                  $sessions = $rows[0][0];

                                  // Print the results.
                                  print "First view (profile) found: $profileName\n";
                                  print "Total sessions: $sessions\n";
                                } else {
                                  print "No results found.\n";
                                } */
                              }
                              ?>

                              <button id="auth-button" hidden>Authorize</button>

                              <h1>Hello Analytics</h1>

                              <textarea cols="80" rows="20" id="query-output"></textarea>


                              <script>

                                var gapi = {};

                                // Replace with your client ID from the developer console.
                                var CLIENT_ID = '765422438917-lv57frabg02j99uraq9tbinacacqjspl.apps.googleusercontent.com';

                                // Set authorized scope.
                                var SCOPES = ['https://www.googleapis.com/auth/analytics.readonly'];


                                function authorize(event) {
                                  // Handles the authorization flow.
                                  // `immediate` should be false when invoked from the button click.
                                  var useImmdiate = event ? false : true;
                                  var authData = {
                                    client_id: CLIENT_ID,
                                    scope: SCOPES,
                                    immediate: useImmdiate
                                  };

                                  gapi.auth.authorize(authData, function(response) {
                                    var authButton = document.getElementById('auth-button');
                                    if (response.error) {
                                      authButton.hidden = false;
                                    }
                                    else {
                                      authButton.hidden = true;
                                      queryAccounts();
                                    }
                                  });
                                }


                              function queryAccounts() {
                                // Load the Google Analytics client library.
                                gapi.client.load('analytics', 'v3').then(function() {

                                  // Get a list of all Google Analytics accounts for this user
                                  gapi.client.analytics.management.accounts.list().then(handleAccounts);
                                });
                              }


                              function handleAccounts(response) {
                                // Handles the response from the accounts list method.
                                if (response.result.items && response.result.items.length) {
                                  // Get the first Google Analytics account.
                                  var firstAccountId = response.result.items[0].id;

                                  // Query for properties.
                                  queryProperties(firstAccountId);
                                } else {
                                  console.log('No accounts found for this user.');
                                }
                              }


                              function queryProperties(accountId) {
                                // Get a list of all the properties for the account.
                                gapi.client.analytics.management.webproperties.list(
                                    {'accountId': accountId})
                                  .then(handleProperties)
                                  .then(null, function(err) {
                                    // Log any errors.
                                    console.log(err);
                                });
                              }


                              function handleProperties(response) {
                                // Handles the response from the webproperties list method.
                                if (response.result.items && response.result.items.length) {

                                  // Get the first Google Analytics account
                                  var firstAccountId = response.result.items[0].accountId;

                                  // Get the first property ID
                                  var firstPropertyId = response.result.items[0].id;

                                  // Query for Views (Profiles).
                                  queryProfiles(firstAccountId, firstPropertyId);
                                } else {
                                  console.log('No properties found for this user.');
                                }
                              }


                              function queryProfiles(accountId, propertyId) {
                                // Get a list of all Views (Profiles) for the first property
                                // of the first Account.
                                gapi.client.analytics.management.profiles.list({
                                    'accountId': accountId,
                                    'webPropertyId': propertyId
                                })
                                .then(handleProfiles)
                                .then(null, function(err) {
                                    // Log any errors.
                                    console.log(err);
                                });
                              }


                              function handleProfiles(response) {
                                // Handles the response from the profiles list method.
                                if (response.result.items && response.result.items.length) {
                                  // Get the first View (Profile) ID.
                                  var firstProfileId = response.result.items[0].id;

                                  // Query the Core Reporting API.
                                  queryCoreReportingApi(firstProfileId);
                                } else {
                                  console.log('No views (profiles) found for this user.');
                                }
                              }


                              function queryCoreReportingApi(profileId) {
                                // Query the Core Reporting API for the number sessions for
                                // the past seven days.
                                gapi.client.analytics.data.ga.get({
                                  'ids': 'ga:' + profileId,
                                  'start-date': '7daysAgo',
                                  'end-date': 'today',
                                  'dimensions': 'ga:landingPagePath',
                                  'metrics': 'ga:pageviews',
                                  'sort': '-ga:pageviews',
                                  'filters': 'ga:landingPagePath=~/property/([^\?]+)\/?$'
                                })
                                .then(function(response) {
                                  var formattedJson = JSON.stringify(response.result, null, 2);
                                  document.getElementById('query-output').value = formattedJson;
                                })
                                .then(null, function(err) {
                                    // Log any errors.
                                    console.log(err);
                                });
                              }

                                // Add an event listener to the 'auth-button'.
                                document.getElementById('auth-button').addEventListener('click', authorize);
                              </script>

                              <script src="https://apis.google.com/js/client.js?onload=authorize"></script>
                            <?php } ?>

                            <!--start Pagination-->
                            <?php houzez_pagination( $prop_qry->max_num_pages, $range = 2 ); ?>
                            <!--start Pagination-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
