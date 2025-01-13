<?php
/**
 * Plugin Name: Sofidev Disable API
 * Plugin URI: https://github.com/SofiDevO/sofi-disableWP-api
 * Description: Disable the REST API for non-authenticated users
 * Version: 1.0
 * Author: SofiDev
 * Author URI: https://links.itssofi.dev/
 * License: GPLv2 or later
 */

 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Function ensure the REST API is disabled for non-authenticated users
add_filter( 'rest_authentication_errors', function( $result ) {
    // If a previous authentication check was applied,
    // pass that result along without modification.
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }

    // No authentication has been performed yet.
    // Return an error if user is not logged in.
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You are not currently logged in. 🦝' ),
            array( 'status' => 401 )
        );
    }
    // Our custom authentication check should have no effect
    // on logged-in requests
    return $result;
});
