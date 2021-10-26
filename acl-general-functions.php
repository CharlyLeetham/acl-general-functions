<?php 
/*
Plugin Name: ACL General Functions
Plugin URI: http://askcharlyleetham.com
Description: Functions for Website
Version: 1
Author: Charly Dwyer
Author URI: http://askcharlyleetham.com
License: GPL

Changelog
Version 1.0 - Original Version
*/

add_action ( 'wp_head', 'acl_scripts', 100 );
function acl_scripts() {
    wp_enqueue_script( 'acl_match_heights', plugin_dir_url( __FILE__ ).'js/jquery.matchHeight.js','' , '0.7.2', true );
}