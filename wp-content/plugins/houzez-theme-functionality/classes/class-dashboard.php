<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 03/10/18
 * Time: 11:39 PM
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Houzez_Dashboard {
    
    /**
     * Initialize custom post type
     *
     * @access public
     * @return void
     */
    public static function init() {
        
    }


    /**
     * Render dashboard
     * @return void
     */
    public static function render()
    {
        $template = apply_filters( 'houzez_dashboard_template_path', HOUZEZ_TEMPLATES . '/dashboard.php' );

        if ( file_exists( $template ) ) {
            include_once( $template );
        }
    }

        
}
?>