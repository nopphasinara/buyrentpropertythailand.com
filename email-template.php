<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>%gcreative_mail_subject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style media="all">
    /* Some sensible defaults for images Bring inline: Yes. */
    img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
    a img {border:none;}
    .image_fix {display:block;}
    p {margin: 1em 0;}
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
    h1, h2, h3, h4, h5, h6 {color: black !important;}
    table td {border-collapse: collapse;}

    #outlook a {padding:0;}

    #page-wrapper {margin:0; padding:0; width:100% !important; line-height:100% !important;}
    #main-wrapper {margin:0; padding:0; width:600px !important; }
    </style>
  </head>
  <body style="margin: 0; padding: 0; width: 100%; height: 100%; min-width: 100%; min-height: 100%:">

    <?php
    $table_reset_attrs = 'cellpadding="0" cellspacing="0" border="0"';
    $table_reset_style = '';
    $table_reset_style_border = ' border-collapse: collapse;';
    $p_reset_style = 'margin-top: 0; margin-bottom: 1em; margin-left: 0; margin-right: 0;';

    function table_reset_attrs() {
      global $table_reset_attrs;
      echo $table_reset_attrs;
    }

    function table_reset_style() {
      global $table_reset_style;
      echo $table_reset_style;
    }

    function p_reset_style($style = '', $no_margin_bottom = false) {
      global $p_reset_style;
      $last_style = '';
      if ($no_margin_bottom === true) $last_style = 'margin-bottom: 0 !important;';
      echo $p_reset_style . ' ' . $style . ' ' . $last_style;
    }

    function p_heading_style($heading = '', $no_margin_bottom = false) {
      $default_style = p_reset_style('', true);

      $margin_size = '.8em';
      if ($no_margin_bottom === true) $margin_size = '0';

      if (!$heading) $heading = 'h1';
      $headings = [
        'h1' => 'font-size: 24px; margin-bottom: '. $margin_size .' !important;',
        'h2' => 'font-size: 20px; margin-bottom: '. $margin_size .' !important;',
        'h3' => 'font-size: 18px; margin-bottom: '. $margin_size .' !important;',
        'h4' => 'font-size: 16px; margin-bottom: '. $margin_size .' !important;',
        'h5' => 'font-size: 14px; margin-bottom: '. $margin_size .' !important;',
        'h6' => 'font-size: 12px; margin-bottom: '. $margin_size .' !important;',
      ];

      echo $default_style . ' ' . $headings[$heading];
    }

    function table_reset_style_border($table_reset_style = '') {
      global $table_reset_style_border;
      if ($table_reset_style) $table_reset_style_border .= ' ' . $table_reset_style;
      echo $table_reset_style_border;
    }

    function table_divider($height = '10', $colspan = '', $rowspan = '') {
      if ($colspan) $colspan = 'colspan="'. $colspan .'"';
      if ($rowspan) $rowspan = 'rowspan="'. $rowspan .'"';

      echo '<tr><td '. $colspan .' '. $rowspan .' style="font-size: 0; line-height: 0;" height="'. $height .'">&nbsp;</td></tr>';
    }

    function td_divider($width = '10', $colspan = '', $rowspan = '') {
      if ($colspan) $colspan = 'colspan="'. $colspan .'"';
      if ($rowspan) $rowspan = 'rowspan="'. $rowspan .'"';

      echo '<td '. $colspan .' '. $rowspan .' valign="top" style="font-size: 0; line-height: 0;" width="'. $width .'">&nbsp;</td>';
    }

    function table_main_width() {
      echo '540';
    }

    function set_padding($top = '', $right = '', $bottom = '', $left = '') {
      if ($top) $top = 'padding-top: '. $top .';';
      if ($right) $right = 'padding-right: '. $right .';';
      if ($bottom) $bottom = 'padding-bottom: '. $bottom .';';
      if ($left) $left = 'padding-left: '. $left .';';

      echo ' '. $top .' '. $right .' '. $bottom .' '. $left .' ';
    }

    function insert_image($src = '', $alt = '', $width = '', $height = '', $style = '') {
      if (!$src) return;
      if (!$alt) $alt = basename($src);
      if ($width) $width = 'width="'. $width .'"';
      if ($height) $height = 'height="'. $height .'"';
      $style = 'display: block; ' . $style;

      echo '<img src="'. $src .'" alt="'. $alt .'" '. $width .' '. $height .' border="0" style="'. $style .'" />';
    }

    function text_style($font = 'Arial, sans-serif', $size = '14px', $color = '#000000') {
      echo 'color: '. $color .'; font-family: '. $font .'; font-size: '. $size .'; line-height: 1.4em !important;';
    }

    function set_color($name = '') {
      $colors = [
        'default'        => '#000000',
        'primary'        => '#AE0F0B',
        'secondary'      => '#53667A',
        'dark-secondary' => '#3C4958',
        'light'          => '#F5F6F7',
        'dark'           => '#EBEDF0',
        'success'        => '#77C720',
        'info'           => '#00AEEF',
        'danger'         => '#AE0F0B',
        'warning'        => '#FEE8B9',
        'white'          => '#FFFFFF',
      ];

      if (!$name) {
        echo $colors['default'];
        return;
      }

      if (!isset($colors[$name])) {
        echo $colors['default'];
        return;
      }

      echo $colors[$name];
      return;
    }
    ?>

    <table id="page-wrapper" width="100%" <?php table_reset_attrs(); ?> bgcolor="<?php set_color('dark'); ?>" style="<?php text_style(); ?>">
      <?php table_divider(60, 3); ?>
      <tr>
        <?php td_divider(30); ?>
        <td valign="top" align="center">

          <table id="main-wrapper" width="<?php table_main_width(); ?>" <?php table_reset_attrs(); ?> bgcolor="<?php set_color('white'); ?>" style="<?php table_reset_style_border(); ?>">
            <tr>
              <td valign="top">

                <table id="header" width="100%" <?php table_reset_attrs(); ?> bgcolor="<?php set_color('light'); ?>" style="<?php table_reset_style_border(); ?>">
                  <tr>
                    <td valign="top" style="<?php set_padding('24px', '24px', '24px', '24px'); ?>">

                      <?php insert_image('https://buyrentpropertythailand.com/wp-content/uploads/2018/09/wwwbrpt-logo.png', 'Buy Rent Property Thailand', '200'); ?>

                    </td>
                  </tr>
                </table><!-- / #header -->

                <table id="content" width="100%" <?php table_reset_attrs(); ?> style="<?php table_reset_style_border(); ?>">
                  <tr>
                    <td valign="top" style="<?php set_padding('24px', '24px', '24px', '24px'); ?>">

                      <p style="<?php p_heading_style(); ?>">
                        <b>%gcreative_title</b>
                      </p>

                      <p style="<?php p_reset_style(); ?>">
                        <b>Hi,</b><br><br>
                        You have received a message from: John Doe<br>
                        Phone Number : 0806411660
                      </p>

                      <p style="<?php p_reset_style('', true); ?>">
                        <b>Additional message is as follows.</b><br>
                        Hi glen walter, I saw your profile on Buy Rent Property Thailand and wanted to see if you could help me
                      </p>

                    </td>
                  </tr>
                </table><!-- / #content -->

                <table id="footer" width="100%" <?php table_reset_attrs(); ?> bgcolor="<?php set_color('secondary'); ?>" style="color: <?php set_color('light'); ?>; <?php table_reset_style_border(); ?>">
                  <tr>
                    <td valign="top" style="<?php set_padding('24px', '24px', '24px', '24px'); ?>">

                      <table width="100%" <?php table_reset_attrs(); ?> style="<?php table_reset_style_border(); ?>">
                        <tr>
                          <td valign="top">
                            <p style="<?php p_reset_style('', true); ?>">
                              Soi Siam Country, Pattaya, Chon Buri, Thailand, 20150<br>
                              <b>Buy Rent Property Thailand</b>
                            </p>
                          </td>
                          <td valign="top" align="right" width="160">
                            &nbsp;
                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table><!-- / #footer -->

              </td>
            </tr>
          </table>

        </td>
        <?php td_divider(30); ?>
      </tr>
      <?php table_divider(60, 3); ?>
    </table>

  </body>
</html>
