<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content.
 *
 * @package Houzez
 * @since Houzez 1.0
 */
$copy_rights = houzez_option('copy_rights');
global $houzez_local;

$footer_menu_count = 0;

if ( has_nav_menu( 'footer-menu-1' ) ) $footer_menu_count += 1;
if ( has_nav_menu( 'footer-menu-2' ) ) $footer_menu_count += 1;
if ( has_nav_menu( 'footer-menu-3' ) ) $footer_menu_count += 1;
if ( has_nav_menu( 'footer-menu-4' ) ) $footer_menu_count += 1;

$footer_menu_1_active = has_nav_menu( 'footer-menu-1' );
$footer_menu_2_active = has_nav_menu( 'footer-menu-2' );
$footer_menu_3_active = has_nav_menu( 'footer-menu-3' );
$footer_menu_4_active = has_nav_menu( 'footer-menu-4' );

$footer_menu_sm_size = 6;
$footer_menu_md_size = 12;

if ( $footer_menu_count == 4 ) {
  $footer_menu_md_size = 3;
} elseif ( $footer_menu_count == 3 ) {
  $footer_menu_md_size = 4;
} elseif ( $footer_menu_count == 2 ) {
  $footer_menu_md_size = 6;
} else {
  $footer_menu_md_size = 12;
}

$search_url = '/advanced-search/?keyword=&location={{location}}&status={{status}}&type={{type}}&property_id=&bedrooms=&bathrooms=&min-area=&max-area=&min-price=&max-price=';
$search_query_string = array(
  '1' => array(
    array(
      'name' => 'Pattaya property for sale',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-sale',
        'type' => '',
      ),
    ),
    array(
      'name' => 'Jomtien property for sale',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-sale',
        'type' => '',
      ),
    ),
    array(
      'name' => 'Naklua property for sale',
      'params' => array(
        'location' => 'naklua',
        'status' => 'for-sale',
        'type' => '',
      ),
    ),
    array(
      'name' => 'East Pattaya property for sale',
      'params' => array(
        'location' => 'east-pattaya',
        'status' => 'for-sale',
        'type' => '',
      ),
    ),
  ),
  '2' => array(
    array(
      'name' => 'Pattaya property for rent',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-rent',
        'type' => '',
      ),
    ),
    array(
      'name' => 'Jomtien property for rent',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-rent',
        'type' => '',
      ),
    ),
    array(
      'name' => 'Naklua property for rent',
      'params' => array(
        'location' => 'naklua',
        'status' => 'for-rent',
        'type' => '',
      ),
    ),
    array(
      'name' => 'East Pattaya property for rent',
      'params' => array(
        'location' => 'east-pattaya',
        'status' => 'for-rent',
        'type' => '',
      ),
    ),
  ),
  '3' => array(
    array(
      'name' => 'Houses for sale in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-sale',
        'type' => 'house',
      ),
    ),
    array(
      'name' => 'Houses for sale in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-sale',
        'type' => 'house',
      ),
    ),
    array(
      'name' => 'Condos for sale in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-sale',
        'type' => 'condo',
      ),
    ),
    array(
      'name' => 'Condos for sale in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-sale',
        'type' => 'condo',
      ),
    ),
    array(
      'name' => 'Projects for sale in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-sale',
        'type' => 'project',
      ),
    ),
    array(
      'name' => 'Projects for sale in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-sale',
        'type' => 'project',
      ),
    ),
    array(
      'name' => 'Commercial for sale in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-sale',
        'type' => 'commercial',
      ),
    ),
    array(
      'name' => 'Commercial for sale in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-sale',
        'type' => 'commercial',
      ),
    ),
  ),
  '4' => array(
    array(
      'name' => 'Houses for rent in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-rent',
        'type' => 'house',
      ),
    ),
    array(
      'name' => 'Houses for rent in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-rent',
        'type' => 'house',
      ),
    ),
    array(
      'name' => 'Condos for rent in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-rent',
        'type' => 'condo',
      ),
    ),
    array(
      'name' => 'Condos for rent in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-rent',
        'type' => 'condo',
      ),
    ),
    array(
      'name' => 'Projects for rent in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-rent',
        'type' => 'project',
      ),
    ),
    array(
      'name' => 'Projects for rent in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-rent',
        'type' => 'project',
      ),
    ),
    array(
      'name' => 'Commercial for rent in Pattaya',
      'params' => array(
        'location' => 'pattaya',
        'status' => 'for-rent',
        'type' => 'commercial',
      ),
    ),
    array(
      'name' => 'Commercial for rent in Jomtien',
      'params' => array(
        'location' => 'jomtien',
        'status' => 'for-rent',
        'type' => 'commercial',
      ),
    ),
  ),
);
?>

<?php if ( houzez_is_footer() ) { ?>

    <?php if( houzez_container_needed() ) { ?>
    </div> <!--.container Start in header-->
    <?php } ?>
</div> <!--Start in header end #section-body-->

<?php get_template_part('template-parts/scroll-to-top'); ?>

<!--start footer section-->
<footer id="footer-section">

    <div class="footer-menu-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <ul class="list-unstyled">
              <li class="footer-menu-title">Property for sale</li>
              <?php
              foreach ($search_query_string[1] as $query_key => $query) {
                $query_url = $search_url;
                foreach ($query['params'] as $param_key => $param_value) {
                  $query_url = str_ireplace('{{'. $param_key .'}}', $param_value, $query_url);
                }
                ?><li><a href="<?php echo $query_url; ?>"><?php echo $query['name']; ?></a></li><?php
              }
              ?>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul class="list-unstyled">
              <li class="footer-menu-title">Property for rent</li>
              <?php
              foreach ($search_query_string[2] as $query_key => $query) {
                $query_url = $search_url;
                foreach ($query['params'] as $param_key => $param_value) {
                  $query_url = str_ireplace('{{'. $param_key .'}}', $param_value, $query_url);
                }
                ?><li><a href="<?php echo $query_url; ?>"><?php echo $query['name']; ?></a></li><?php
              }
              ?>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul class="list-unstyled">
              <li class="footer-menu-title">Real estate for sale</li>
              <?php
              foreach ($search_query_string[3] as $query_key => $query) {
                $query_url = $search_url;
                foreach ($query['params'] as $param_key => $param_value) {
                  $query_url = str_ireplace('{{'. $param_key .'}}', $param_value, $query_url);
                }
                ?><li><a href="<?php echo $query_url; ?>"><?php echo $query['name']; ?></a></li><?php
              }
              ?>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <ul class="list-unstyled">
              <li class="footer-menu-title">Real estate for rent</li>
              <?php
              foreach ($search_query_string[4] as $query_key => $query) {
                $query_url = $search_url;
                foreach ($query['params'] as $param_key => $param_value) {
                  $query_url = str_ireplace('{{'. $param_key .'}}', $param_value, $query_url);
                }
                ?><li><a href="<?php echo $query_url; ?>"><?php echo $query['name']; ?></a></li><?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('template-parts/footer'); ?>

    <div class="footer-bottom">

    	<div class="container">
            <div class="row">
                <?php if( !empty($copy_rights) ) { ?>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <p><?php echo ( $copy_rights ); ?></p>
                    </div>
                </div>
                <?php } ?>

                <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
                  <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                      <div class="navi">
                        <?php
                        // Pages Menu
                        if ( has_nav_menu( 'footer-menu' ) ) :
                          wp_nav_menu( array (
                            'theme_location' => 'footer-menu',
                            'container' => '',
                            'container_class' => '',
                            'menu_class' => '',
                            'menu_id' => 'footer-menu',
                            'depth' => 1
                          ));
                        endif;
                        ?>
                      </div>

                    </div>
                  </div>
                <?php } ?>

            <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
            </div>
            <div class="row has-footer-menu">
            <?php } ?>
              <?php if( houzez_option('social-footer') != '0' ) {
               if( houzez_option('fs-facebook') != '' || houzez_option('fs-twitter') != '' || houzez_option('fs-linkedin') != '' || houzez_option('fs-googleplus') != '' || houzez_option('fs-instagram') != '' || houzez_option('fs-pinterest') != '' ) { ?>
              <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
                <div class="col-md-12 col-sm-12">
              <?php } else { ?>
                <div class="col-md-6 col-sm-6">
              <?php } ?>
                  <div class="footer-col foot-social">
                      <p>
                          <?php // echo $houzez_local['follow_us']; ?>

                          <?php if( houzez_option('fs-facebook') != '' ){ ?>
                  <a target="_blank" href="<?php echo esc_url(houzez_option('fs-facebook')); ?>"><i class="fa fa-facebook-square"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-twitter') != '' ){ ?>
                    <a target="_blank" href="<?php echo esc_url(houzez_option('fs-twitter')); ?>"><i class="fa fa-twitter-square"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-linkedin') != '' ){ ?>
                    <a target="_blank" href="<?php echo esc_url(houzez_option('fs-linkedin')); ?>"><i class="fa fa-linkedin-square"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-googleplus') != '' ){ ?>
                    <a target="_blank" href="<?php echo esc_url(houzez_option('fs-googleplus')); ?>"><i class="fa fa-google-plus-square"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-instagram') != '' ){ ?>
                    <a target="_blank" href="<?php echo esc_url(houzez_option('fs-instagram')); ?>"><i class="fa fa-instagram"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-pinterest') != '' ){ ?>
                    <a target="_blank" href="<?php echo esc_url(houzez_option('fs-pinterest')); ?>"><i class="fa fa-pinterest"></i></a>
                <?php } ?>

                <?php if( houzez_option('fs-yelp') != '' ){ ?>
                              <a target="_blank" href="<?php echo esc_url(houzez_option('fs-yelp')); ?>"><i class="fa fa-yelp"></i></a>
                          <?php } ?>
                          <?php if( houzez_option('fs-youtube') != '' ){ ?>
                              <a target="_blank" href="<?php echo esc_url(houzez_option('fs-youtube')); ?>"><i class="fa fa-youtube"></i></a>
                          <?php } ?>
                      </p>
                  </div>
              </div>
              <?php }
              } ?>
            </div>
        </div>

    </div><!-- End footer bottom -->

</footer>
<!--end footer section-->
<?php } else { // End splash template if ?>
    </div> <!--Start in header end #section-body-->
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
