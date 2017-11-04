<?php

class WPWA_Admin_Theme {

    public function __construct() {
        //add_action( 'admin_enqueue_scripts', array( $this, 'wpwa_admin_theme_style' ) );
        //add_action( 'login_enqueue_scripts', array( $this, 'wpwa_admin_theme_style' ) );
    }

    public function wpwa_admin_theme_style() {
        //wp_enqueue_style( 'my-admin-theme', plugins_url('css/wp-admin.css', __FILE__) );
    }

}

//$admin_theme = new WPWA_Admin_Theme();

