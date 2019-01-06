<?php

require( dirname(__FILE__) . '/wp-load.php' );

$string = 'asdfg54321!@#$%';
$hashed = '$P$B1Ysp5KbSVi/xn3YWIoljhgJ9YHjJ80';
$hash = wp_check_password($string, $hashed);

echo '<pre>'; print_r($hash); echo '</pre>';
