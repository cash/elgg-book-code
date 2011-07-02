<?php
/**
 * Sidebar tips
 *
 * Demonstrates how to extend a view
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

register_elgg_event_handler('init', 'system', 'sidebar_tip_init');

/**
 * Initialize the plugin
 */
function sidebar_tip_init() {
	// only show tops to logged in users
	if (isloggedin()) {
		elgg_extend_view('elgg_sidebar/extend', 'sidebar_tip/tip');
	} else {
		elgg_extend_view('elgg_sidebar/extend', 'sidebar_tip/join');
	}
}

/**
 * Get a random tip (tips are in the language file)
 */
function sidebar_tip_get_tip() {
	$num_tips = 4;

	$select = rand(1, $num_tips);
	return elgg_echo("tip$select");
}