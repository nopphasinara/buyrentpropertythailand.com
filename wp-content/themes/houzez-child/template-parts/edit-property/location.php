<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 18/01/16
 * Time: 5:45 PM
 */
global $prop_meta_data, $prop_data, $required_fields, $hide_add_prop_fields, $is_multi_steps;
$prop_location = isset($prop_meta_data['fave_property_location'][0]) ? $prop_meta_data['fave_property_location'][0] : '';
$map_street_view = isset($prop_meta_data['fave_property_map_street_view'][0]) ? $prop_meta_data['fave_property_map_street_view'][0] : '';
$prop_location = explode(",", $prop_location);
$location_dropdowns = houzez_option('location_dropdowns');
$geo_country_limit = houzez_option('geo_country_limit');

$geocomplete_country = '';
if( $geo_country_limit != 0 ) {
    $geocomplete_country = houzez_option('geocomplete_country');
}
?>
<div class="account-block <?php echo esc_attr($is_multi_steps);?> houzez-location" >

    <script>
        jQuery(function($) {
            "use strict";

            // 12.9235557, 100.88245510000002

            var googleMap = {};

            var inputMap = document.getElementById('map');
            var geocomplete = document.getElementById('geocomplete');
            var inputLat = document.getElementById('latitude');
            var inputLng = document.getElementById('longitude');
            var find = document.getElementById('find');
            var findLocation = document.getElementById('find_location');

            var edit_property = true;
            var default_country = '<?php echo esc_attr( $geocomplete_country ); ?>';
            var default_address = '<?php echo sanitize_text_field( $prop_meta_data['fave_property_map_address'][0] ); ?>';
            var default_center = new google.maps.LatLng({
              'lat': <?php echo sanitize_text_field( $prop_location[0] ); ?>,
              'lng': <?php echo sanitize_text_field( $prop_location[1] ); ?>,
            });

            googleMap.map = null;
            googleMap.mapOptions = {
              'zoom': 13,
              'center': default_center,
            };
            googleMap.marker = null;
            googleMap.geocoder = null;
            googleMap.address = null;
            googleMap.geocoderOptions = {
              'componentRestrictions': {
                'country': default_country,
              },
            };
            googleMap.autocomplete = null;
            googleMap.place = null;

            function mapSetLatLng(lat, lng) {
              var latLng = new google.maps.LatLng({
                'lat': lat,
                'lng': lng,
              });

              return latLng;
            }

            function mapLog(mapResult = '') {
              if (mapResult) {
                console.log(mapResult);
              } else {
                console.log(googleMap);
              }
            }

            function mapSetInput(mapResult) {
              inputLat.value = mapResult.mapOptions.lat;
              inputLng.value = mapResult.mapOptions.lng;
            }

            function mapUpdateOptions(mapResult, options = {}) {
              for (var item in options) {
                mapResult.mapOptions[item] = options[item];
              }
            }

            function mapSetMarker(mapResult, markerResult, options = {}) {
              if (markerResult) {
                markerResult.setMap(null);
              }

              markerResult = new google.maps.Marker({
                'position': options.location,
                'map': mapResult.map,
                'draggable': true,
              });

              mapResult.marker = markerResult;
              mapResult.marker.addListener('dragend', function (evt) {
                var latLng = mapSetLatLng(evt.latLng.lat(), evt.latLng.lng());

                mapUpdateOptions(mapResult, {
                  'lat': latLng.lat(),
                  'lng': latLng.lng(),
                });
                mapSetInput(mapResult);
              });
            }

            function mapSetCenter(mapResult, options) {
              mapResult.map.setCenter(options.location);
              mapResult.map.setZoom(mapResult.mapOptions.zoom);
            }

            function mapGetAddress(mapResult, options) {
              mapResult.geocoder.geocode(options, function(results, status) {
                var location = {};
                if (status == 'OK') {
                  location = results[0].geometry.location;

                  mapUpdateOptions(mapResult, {
                    'lat': location.lat(),
                    'lng': location.lng(),
                    'latLng': location,
                  });
                  mapSetInput(mapResult);
                  mapSetCenter(mapResult, {
                    'location': location,
                  });
                  mapSetMarker(mapResult, mapResult.marker, {
                    'location': location,
                  });
                } else {
                  alert('Geocode was not successful for the following reason: ' + status);
                }
              });
            }

            function mapGetReverseAddress(mapResult, options) {
              var location = options.location;
              var latLng = {
                'lat': parseFloat(location.lat()),
                'lng': parseFloat(location.lng()),
              };
              options.location = latLng;

              mapResult.geocoder.geocode(options, function(results, status) {
                if (status === 'OK') {
                  if (results[0]) {
                    mapUpdateOptions(mapResult, {
                      'lat': location.lat(),
                      'lng': location.lng(),
                      'latLng': location,
                    });
                    mapSetInput(mapResult);
                    mapSetCenter(mapResult, {
                      'location': location,
                    });
                    mapSetMarker(mapResult, mapResult.marker, {
                      'location': location,
                    });
                  } else {
                    window.alert('No results found');
                  }
                } else {
                  window.alert('Geocoder failed due to: ' + status);
                }
              });
            }

            function initMap() {
              googleMap.map = new google.maps.Map(inputMap, {
                'zoom': googleMap.mapOptions.zoom,
                'center': googleMap.mapOptions.center,
              });

              googleMap.geocoder = new google.maps.Geocoder();
              googleMap.autocomplete = new google.maps.places.Autocomplete(geocomplete);

              googleMap.map.addListener('click', function(evt) {
                var latLng = mapSetLatLng(evt.latLng.lat(), evt.latLng.lng());

                mapUpdateOptions(googleMap, {
                  'lat': latLng.lat(),
                  'lng': latLng.lng(),
                });
                mapSetInput(googleMap);
                mapSetMarker(googleMap, googleMap.marker, {
                  'location': latLng,
                });

                mapLog();
              });

              find.addEventListener('click', function () {
                var options = googleMap.geocoderOptions;
                var address = default_address;
                if (geocomplete.value) {
                  address = geocomplete.value;
                } else {
                  alert('Please enter property address');
                  return false;
                }
                options.address = address;

                mapGetAddress(googleMap, options);
              });

              findLocation.addEventListener('click', function () {
                var options = googleMap.geocoderOptions;
                var location = default_center;
                if (inputLat.value && inputLng.value) {
                  location = mapSetLatLng(parseFloat(inputLat.value), parseFloat(inputLng.value));
                } else {
                  alert('Please enter map location');
                  return false;
                }
                options.location = location;

                mapGetReverseAddress(googleMap, options);

                googleMap.map.setZoom(googleMap.mapOptions.zoom);
              });

              googleMap.autocomplete.bindTo('bounds', googleMap.map);
              googleMap.autocomplete.setTypes([
                'geocode',
                'establishment',
              ]);
              googleMap.autocomplete.setComponentRestrictions({
                'country': default_country,
              });
              // googleMap.autocomplete.setFields([
              //   'address_components',
              //   'geometry',
              //   'icon',
              //   'name',
              // ]);

              googleMap.autocomplete.addListener('place_changed', function() {
                var location = {};
                // googleMap.marker.setVisible(false);
                googleMap.place = googleMap.autocomplete.getPlace();

                if (!googleMap.place.geometry) {
                  // User entered the name of a Place that was not suggested and
                  // pressed the Enter key, or the Place Details request failed.
                  window.alert("No details available for input: '" + googleMap.place.name + "'");
                  return;
                } else {
                  location = googleMap.place.geometry.location;
                }

                // If the place has a geometry, then present it on a map.
                if (googleMap.place.geometry.viewport) {
                  googleMap.map.fitBounds(googleMap.place.geometry.viewport);
                } else {
                  // location = googleMap.place.geometry.location;
                  // googleMap.map.setCenter(location);
                  // googleMap.map.setZoom(googleMap.mapOptions.zoom);
                }
                // googleMap.marker.setVisible(true);

                googleMap.address = {
                  'road': '',
                  'town': '',
                  'county': '',
                  'country': '',
                };
                if (googleMap.place.address_components) {
                  googleMap.address.number = googleMap.place.address_components[0].long_name;
                  googleMap.address.road = googleMap.place.address_components[1].long_name;
                  googleMap.address.city = googleMap.place.address_components[2].long_name;
                  googleMap.address.state = googleMap.place.address_components[3].long_name;
                  googleMap.address.country = googleMap.place.address_components[4].long_name;
                  googleMap.address.zip = googleMap.place.address_components[(googleMap.place.address_components.length - 1)].long_name;

                  $('#city').val(googleMap.address.city);
                  $('#zip').val(googleMap.address.zip);

                  if (location) {
                    mapUpdateOptions(googleMap, {
                      'lat': location.lat(),
                      'lng': location.lng(),
                      'latLng': location,
                    });
                    mapSetInput(googleMap);
                    mapSetCenter(googleMap, {
                      'location': location,
                    });
                    mapSetMarker(googleMap, googleMap.marker, {
                      'location': location,
                    });
                  }
                }
              });

              var location = {};
              if (edit_property == true) {
                location = mapSetLatLng(googleMap.mapOptions.center.lat(), googleMap.mapOptions.center.lng());

                mapUpdateOptions(googleMap, {
                  'lat': location.lat(),
                  'lng': location.lng(),
                  'latLng': location,
                });
                // mapSetInput(googleMap);
                mapSetCenter(googleMap, {
                  'location': location,
                });
                mapSetMarker(googleMap, googleMap.marker, {
                  'location': location,
                });
              }

              mapLog();

              return googleMap;
            }

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(current_location) {
                var latLng = mapSetLatLng(current_location.coords.latitude, current_location.coords.longitude);
                if (latLng.lat() && latLng.lng()) {
                  googleMap.mapOptions.center = default_center = latLng;
                }
              }, function() {
                console.log('Try HTML5 geolocation');
              });
            } else {
              // Browser doesn't support Geolocation
              console.log('Browser doesn\'t support Geolocation');
            }

            window.addEventListener('load', function () {
              window.setTimeout(function() {
                initMap();
              }, 1000);
            });
        });
    </script>

    <div class="add-title-tab">
        <h3><?php esc_html_e( 'Property location', 'houzez' ); ?></h3>
        <div class="add-expand"></div>
    </div>
    <div class="add-tab-content">
        <div class="add-tab-row  push-padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="address"><?php echo esc_html__( 'Address', 'houzez' ).houzez_required_field( $required_fields['property_map_address'] ); ?></label>
                        <input class="form-control" name="property_map_address" value="<?php echo sanitize_text_field( $prop_meta_data['fave_property_map_address'][0] ); ?>" id="geocomplete" placeholder="<?php esc_html_e( 'Enter your property address', 'houzez' ); ?>">
                    </div>
                </div>

                <?php if ($hide_add_prop_fields['country'] != 1) { ?>
                    <div class="col-sm-6 submit_country_field">
                        <div class="form-group">
                            <label for="country"><?php esc_html_e( 'Country', 'houzez' ); ?></label>
                            <?php if( $location_dropdowns == 'yes' ) { ?>
                                <select name="country_short" id="country" class="selectpicker" data-live-search="true">
                                    <?php
                                    $countries_list = houzez_countries_list();
                                    foreach( $countries_list as $key => $country ):
                                        echo '<option '.selected( $prop_meta_data['fave_property_country'][0], $key, false ).' value="'.$key.'">'.$country.'</option>';
                                    endforeach;
                                    ?>
                                </select>
                            <?php } else { ?>
                                <input class="form-control" name="country" value="<?php echo houzez_country_code_to_country($prop_meta_data['fave_property_country'][0]); ?>" id="country" placeholder="<?php esc_html_e( 'Enter your property country', 'houzez' ); ?>">
                                <input name="country_short" type="hidden" value="<?php echo sanitize_text_field( $prop_meta_data['fave_property_country'][0] ); ?>">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($hide_add_prop_fields['state'] != 1) { ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="countyState"><?php echo esc_html__( 'County / State', 'houzez' ); ?></label>
                            <?php if( $location_dropdowns == 'yes' ) { ?>
                                <select name="administrative_area_level_1" id="administrative_area_level_1" class="selectpicker" data-live-search="true">
                                    <?php houzez_taxonomy_edit_hirarchical_options_for_search( $prop_data->ID, 'property_state'); ?>
                                </select>
                            <?php } else { ?>
                                <input class="form-control" value="<?php echo houzez_taxonomy_by_postID( $prop_data->ID, 'property_state' ); ?>" name="administrative_area_level_1" id="countyState" placeholder="<?php esc_html_e( 'Enter your property county/state', 'houzez' ); ?>">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($hide_add_prop_fields['city'] != 1) { ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="city"><?php echo esc_html__( 'City', 'houzez' ); ?></label>
                            <?php if( $location_dropdowns == 'yes' ) { ?>
                                <select name="locality" id="locality" class="selectpicker" data-live-search="true">
                                    <?php houzez_taxonomy_edit_hirarchical_options_for_search( $prop_data->ID, 'property_city'); ?>
                                </select>
                            <?php } else { ?>
                                <input class="form-control" value="<?php echo houzez_taxonomy_by_postID( $prop_data->ID, 'property_city' ); ?>" name="locality" id="city" placeholder="<?php esc_html_e( 'Enter your property city', 'houzez' ); ?>">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($hide_add_prop_fields['neighborhood'] != 1) { ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="neighborhood"><?php echo esc_html__( 'Neighborhood', 'houzez' ); ?></label>
                        <?php if( $location_dropdowns == 'yes' ) { ?>
                            <select name="neighborhood2" id="neighborhood2" class="selectpicker" data-live-search="true">
                                <?php houzez_taxonomy_edit_hirarchical_options_for_search( $prop_data->ID, 'property_area'); ?>
                            </select>
                        <?php } else { ?>
                            <input class="form-control" name="neighborhood" value="<?php echo houzez_taxonomy_by_postID( $prop_data->ID, 'property_area' ); ?>" id="neighborhood" placeholder="<?php esc_html_e( 'Enter your property neighborhood', 'houzez' ); ?>">
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <?php if ($hide_add_prop_fields['postal_code'] != 1) { ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="zip"><?php esc_html_e( 'Postal Code / Zip', 'houzez' ); ?></label>
                        <input class="form-control" name="postal_code" value="<?php if( isset($prop_meta_data['fave_property_zip'][0]) ) { echo sanitize_text_field( $prop_meta_data['fave_property_zip'][0] ); } ?>" id="zip" placeholder="<?php esc_html_e( 'Enter your property zip code', 'houzez' ); ?>">
                    </div>
                </div>
                <?php } ?>




            </div>
        </div>
        <div class="add-tab-row">
            <div class="row">
                <div class="col-sm-6">
                    <div class="map_canvas" id="map">
                    </div>
                    <!-- <button id="find" class="btn btn-primary btn-block"><?php esc_html_e( 'Place the pin the address above', 'houzez' ); ?></button> -->
                    <a id="reset" href="#" style="display:none;"><?php esc_html_e('Reset Marker', 'houzez');?></a>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="latitude"><?php esc_html_e( 'Google Maps latitude', 'houzez' ); ?></label>
                        <input class="form-control" value="<?php echo sanitize_text_field( $prop_location[0] ); ?>" name="lat" id="latitude" placeholder="<?php esc_html_e( 'Enter google maps latitude', 'houzez' ); ?>">
                    </div>
                    <div class="form-group">
                        <label for="longitude"><?php esc_html_e( 'Google Maps longitude', 'houzez' ); ?></label>
                        <input class="form-control" value="<?php echo sanitize_text_field( $prop_location[1] ); ?>" name="lng" id="longitude" placeholder="<?php esc_html_e( 'Enter google maps longitude', 'houzez' ); ?>">
                    </div>
                    <div class="form-group">
                        <label for="prop_google_street_view"><?php esc_html_e('Google Map Street View', 'houzez'); ?></label>
                        <select name="prop_google_street_view" id="prop_google_street_view" class="selectpicker" data-live-search="false">
                            <option <?php selected( $map_street_view, 'hide' ); ?> value="hide"><?php esc_html_e('Hide', 'houzez'); ?></option>
                            <option <?php selected( $map_street_view, 'show' ); ?> value="show"><?php esc_html_e('Show', 'houzez'); ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php esc_html_e('Place marker to the map', 'houzez'); ?></label>
                        <div class="row">
                          <div class="col-sm-6 place-marker-column">
                            <button id="find" type="button" class="btn btn-primary btn-block"><?php esc_html_e( 'Property address', 'houzez' ); ?></button>
                          </div>
                          <div class="col-sm-6 place-marker-column">
                            <button id="find_location" type="button" class="btn btn-primary btn-block"><?php esc_html_e( 'Latitude / Longitude', 'houzez' ); ?></button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
