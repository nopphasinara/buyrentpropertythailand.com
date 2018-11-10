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


                            <?php
                            // $current_user_id = 3465;
                            $current_user_id = $current_user->ID;
                            $current_user_agent_id = get_post_meta($current_user_id, 'houzez_user_meta_id', true);
                            if ($current_user_agent_id) {
                              $current_user_id = $current_user_agent_id;
                            }

                            $args = [
                              'author' => $current_user_id,
                              'post_type' => 'property',
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                            ];
                            $_posts = get_posts($args);

                            if (count($_posts) > 0) {
                              $houzez_stats_graph = houzez_option('houzez_stats_graph');
                              $houzez_graph_type = houzez_option('houzez_graph_type');
                              if (isset($_GET['graph_type'])) {
                                  $houzez_graph_type = $_GET['graph_type'];
                              }

                              if ($houzez_stats_graph != 0) {
                                $_posts_stat = [];

                                foreach ($_posts as $index => $_post) {
                                  if (!array_key_exists($_post->ID, $_posts_stat)) {
                                    $total_views = 0;
                                    $data = [];
                                    $array_labels = houzez_return_traffic_labels($_post->ID);
                                    $array_values = houzez_return_traffic_data($_post->ID);

                                    if (count($array_values) > 0) {
                                      foreach ($array_values as $index => $value) {
                                        $total_views += $value;
                                      }
                                    }

                                    $_posts_stat[$_post->ID] = [
                                      'label' => $_post->post_title,
                                      'data' => [
                                        'labels' => $array_labels,
                                        'values' => $array_values,
                                      ],
                                      'total_views' => $total_views,
                                      'post' => $_post,
                                    ];
                                  }
                                }

                                if (count($_posts_stat) > 0) {
                                  ?>
                                  <hr>

                                  <div class="detail-features detail-block target-block table-responsive">
                                    <div class="detail-title">
                                        <h2 class="title-left"><?php esc_html_e( 'Property Stats', 'houzez' ); ?></h2>
                                    </div>

                                    <div class="stats-block">
                                      <table class="table table-bordered">
                                        <tr>
                                          <td class="bg-primary text-center"><strong>Page Title</strong></td>
                                          <td class="bg-primary text-center" width="15%"><strong>Total Pageviews</strong></td>
                                          <td class="bg-primary text-center" width="15%"><strong>&nbsp;</strong></td>
                                        </tr>
                                        <?php foreach ($_posts_stat as $index => $_post) { ?>
                                          <?php
                                          $houze_stat = [
                                            'stats_labels' => json_encode($_post['data']['labels']),
                                            'stats_values' => json_encode($_post['data']['values']),
                                            'stats_view' => esc_html__('Views', 'houzez'),
                                            'chart_type' => $houzez_graph_type,
                                            'bg_color' => houzez_option('houzez_graph_bg_color', false, 'rgba'),
                                            'border_color' => houzez_option('houzez_graph_border_color', false, 'rgba'),
                                          ];
                                          ?>
                                          <tr>
                                            <td>
                                              <?php echo $_post['post']->post_title; ?>
                                              <div class="collapse" id="collapse<?php echo $_post['post']->ID; ?>">
                                                <div id="stats-<?php echo $_post['post']->ID; ?>" class="detail-features detail-block target-block">
                                                    <div class="detail-title">
                                                        <h2 class="title-left"><?php esc_html_e( 'Page Views', 'houzez' ); ?></h2>
                                                    </div>
                                                    <div class="stats-block">
                                                        <canvas id="myChart-<?php echo $_post['post']->ID; ?>"></canvas>
                                                        <div id="chartjs-tooltip-<?php echo $_post['post']->ID; ?>"></div>
                                                    </div>
                                                </div>
                                                <script>
                                                  jQuery(document).ready(function () {
                                                    var houzez_stats_vars = <?php echo json_encode($houze_stat); ?>;

                                                    var ctx = jQuery("#myChart-<?php echo $_post['post']->ID; ?>").get(0).getContext("2d");
                                                    var myNewChart  =    new Chart(ctx);
                                                    var labels      =   '';
                                                    var traffic_value_data ='  ';

                                                    labels        = jQuery.parseJSON ( houzez_stats_vars.stats_labels);
                                                    traffic_value_data  = jQuery.parseJSON ( houzez_stats_vars.stats_values);

                                                    var data = {
                                                        labels:labels ,
                                                        datasets: [
                                                            {
                                                                label: houzez_stats_vars.stats_view,
                                                                backgroundColor: houzez_stats_vars.bg_color,
                                                                borderColor: houzez_stats_vars.border_color,
                                                                borderWidth: 1,
                                                                data: traffic_value_data
                                                            },
                                                        ]
                                                    };

                                                    var options = {
                                                        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                                                        scaleBeginAtZero : true,

                                                        //Boolean - Whether grid lines are shown across the chart
                                                        scaleShowGridLines : true,

                                                        //String - Colour of the grid lines
                                                        scaleGridLineColor : "rgba(0,0,0,.05)",

                                                        //Number - Width of the grid lines
                                                        scaleGridLineWidth : 1,

                                                        //Boolean - Whether to show horizontal lines (except X axis)
                                                        scaleShowHorizontalLines: true,

                                                        //Boolean - Whether to show vertical lines (except Y axis)
                                                        scaleShowVerticalLines: true,

                                                        //Boolean - If there is a stroke on each bar
                                                        barShowStroke : true,

                                                        //Number - Pixel width of the bar stroke
                                                        barStrokeWidth : 2,

                                                        //Number - Spacing between each of the X value sets
                                                        barValueSpacing : 5,

                                                        //Number - Spacing between data sets within X values
                                                        barDatasetSpacing : 1,
                                                        legend: { display: false },

                                                        tooltips: {
                                                            enabled: true,
                                                            mode: 'x-axis',
                                                            cornerRadius: 4
                                                        },
                                                    }

                                                    var myBarChart = new Chart(ctx, {
                                                        type: houzez_stats_vars.chart_type,
                                                        data: data,
                                                        options: options
                                                    });
                                                  });
                                                </script>
                                              </div>
                                            </td>
                                            <td class="text-right"><?php echo number_format($_post['total_views'], 0, '', ','); ?></td>
                                            <td class="text-center">
                                              <a class="btn btn-default btn-sm" role="button" data-toggle="collapse" href="#collapse<?php echo $_post['post']->ID; ?>" aria-expanded="false" aria-controls="collapse<?php echo $_post['post']->ID; ?>" title="Toggle Stats"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></a>
                                              <a class="btn btn-default btn-sm" href="<?php echo get_post_permalink($_post['post']->ID); ?>" title="View property"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a>
                                            </td>
                                          </tr>
                                        <?php } ?>
                                      </table>
                                    </div>
                                  </div>
                                  <script src="<?php echo get_template_directory_uri() . '/js/Chart.min.js'; ?>"></script>
                                  <?php
                                }
                              }
                            } else {
                              // echo '<h4>'.$houzez_local['properties_not_found'].'</h4>';
                            }
                            ?>

                            <hr>

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
