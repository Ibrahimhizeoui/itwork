<?php
/*
Plugin Name: Services Plugin
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     1.0
Author:      IbrahimHizeoui
Author URI:  https://developer.wordpress.org/
License:     GPL2

*/
if (! defined('ABSPATH')) {
	# code...
	exit;
}
// this page register  the new post type (Job) ans Taxonomy
require_once (plugin_dir_path(__FILE__).'fiels.php');
require_once (plugin_dir_path(__FILE__).'post_type.php');


