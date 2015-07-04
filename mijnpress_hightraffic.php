<?php
/*
Plugin Name: MijnPress high traffic
Plugin URI: http://www.mijnpress.nl
Description: Plugin to create a (more) stable site when having lot's of traffic
Version: 0.0.1
Author: Ramon Fincken
Author URI: http://www.mijnpress.nl
*/
if (!defined('ABSPATH')) die("Aren't you supposed to come here via WP-Admin?");

add_filter('comment_cookie_lifetime', 'mijnpress_ht_comment_cookie_lifetime');
function mijnpress_ht_comment_cookie_lifetime($lifetime) {
	return 5*MINUTE_IN_SECONDS;
}
?>
