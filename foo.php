<?php

// Load the Google API PHP Client Library.
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// $analytics = initializeAnalytics();
// $profile = getFirstProfileId($analytics);
// $results = getResults($analytics, $profile);
// $print = printResults($results);
//
// header('Content-Type: application/json');
// echo $print;

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

function _getResults($analytics, $profileId = '182775723') {
  // Calls the Core Reporting API and queries for the number of sessions
  // for the last seven days.
  return $analytics->data_ga->get(
    'ga:' . $profileId,
    '30daysAgo',
    'today',
    'ga:pageviews'
  );
}

function getResults($analytics, $params = [], $options = []) {
  extract($params);

  return $analytics->data_ga->get(
    'ga:' . $profileId, $start_date, $end_date, $metrics, $options
  );
}

function printResults($results) {
  if (count($results->getRows()) > 0) {
    $html = '';
    $headers = $results->getColumnHeaders();

    foreach ($headers as $header) {
      $html .= "<p>Column Name = {$header->getName()} | Column Type = {$header->getColumnType()} | Column Data Type = {$header->getDataType()}</p>";
    }
    // echo $html;

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
    // echo $table;

    // echo '<pre>'; print_r($results->getTotalsForAllResults()); echo '</pre>';
    // echo '<pre>'; print_r($results->getTotalResults()); echo '</pre>';
    // echo '<pre>'; print_r($results->getQuery()); echo '</pre>';
    // echo '<pre>'; print_r($results->getColumnHeaders()); echo '</pre>';

    // echo '<pre>'; print_r(get_class_methods($results)); echo '</pre>';
    // echo '<pre>'; print_r($results); echo '</pre>';

    return [
      'headers' => $results->getColumnHeaders(),
      'rows' => $results->getRows(),
    ];
  } else {
    // $table .= '<p>No Results Found.</p>';
    // echo $table;
    return '';
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